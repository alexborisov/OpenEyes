<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2012
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2012, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */

/**
 * This is the model class for table "sync_server".
 */
class SyncServer extends BaseActiveRecord
{
	public $processed_events = array();
	public $processed_assets = array();
	public $messages = array();

	/**
	 * Returns the static model of the specified AR class.
	 * @return Firm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sync_server';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		);
	}

	public function getLastSyncText() {
		if ($this->last_sync == '1900-01-01 00:00:00') {
			return 'Never';
		}
		return date('j M Y H:i',strtotime($this->last_sync));
	}

	public function push() {
		$request = array(
			'key' => $this->key,
			'type' => 'PUSH',
			'events' => array(),
			'assets' => array(),
		);

		$criteria = new CDbCriteria;
		$criteria->addCondition("last_modified_date > '$this->last_sync'");
		$criteria->order = "last_modified_date asc";

		/*foreach (Asset::model()->findAll($criteria) as $asset) {
			$request['assets'][] = $asset->wrap();
			$this->processed_assets[] = $asset->hash;
		}
		*/

		foreach (Event::model()->findAll($criteria) as $event) {
			$request['events'][] = $event->wrap();
			$this->processed_events[] = $event->hash;
		}

		if (empty($request['events'])) {
			$this->messages[] = "pushed 0 events";
		}

		if (empty($request['assets'])) {
			$this->messages[] = "pushed 0 assets";
		}

		if (empty($request['events']) && empty($request['assets'])) {
			return true;
		}

		$json = json_encode($request);

		$response = $this->request($json);

		if (!$resp = @json_decode($response,true)) {
			if (preg_match('/Authorization Required/i',$response)) {
				$this->messages[] = "http authorisation required";
			} else {
				$this->messages[] = "unable to parse server response";
			}
			die($response);
			return false;
		}

		if (@$resp['status'] == 'OK') {
			$this->messages[] = "pushed ".count($request['assets'])." asset".(count($request['assets'])==1 ? '' : 's');
			$this->messages[] = "pushed ".count($request['events'])." event".(count($request['events'])==1 ? '' : 's');
			return true;
		}
		$this->messages[] = $resp['message'];
		return false;
	}

	public function pull() {
		$response = $this->request(json_encode(array(
			'key' => $this->key,
			'timestamp' => $this->last_sync,
			'type' => 'PULL',
		)));

		if (!$resp = @json_decode($response,true)) {
			if (preg_match('/Authorization Required/i',$response)) {
				$this->messages[] = "http authorisation required";
			} else {
				$this->messages[] = "unable to parse server response";
			}
			return false;
		}

		if (@$resp['status'] == 'OK') {
			foreach ($resp['assets'] as $i => $asset) {
				if (in_array($asset['hash'],$this->processed_assets)) {
					unset($resp['assets'][$i]);
				}
			}

			foreach ($resp['events'] as $i => $event) {
				if (in_array($event['hash'],$this->processed_events)) {
					unset($resp['events'][$i]);
				}
			}

			Yii::app()->getController()->receiveAssets($resp['assets']);
			Yii::app()->getController()->receiveEvents($resp['events']);

			$this->last_sync = date('Y-m-d H:i:s');
			$this->in_sync = true;
			if (!$this->save()) {
				throw new Exception("Unable to save server state: ".print_r($this->getErrors(),true));
			}
			$this->messages[] = "received ".count($resp['assets'])." asset".(count($resp['assets'])==1 ? '' : 's');
			$this->messages[] = "received ".count($resp['events'])." event".(count($resp['events'])==1 ? '' : 's');
			return true;
		}
		$this->messages[] = $resp['message'];
		return false;
	}

	public function inSync() {
		$response = $this->request(json_encode(array(
			'key' => $this->key,
			'timestamp' => $this->last_sync,
			'type' => 'STATUS',
		)));

		if (!$resp = @json_decode($response,true)) {
			$this->messages[] = "unable to parse server response";
			return false;
		}

		if (!$resp['sync_status']) {
			$server->sync_status = 0;
			if (!$server->save()) {
				throw new Exception("Unable to mark server out of sync: ".print_r($server->getErrors(),true));
			}
		}

		return $resp['sync_status'];
	}

	public function request($json) {
		$c = curl_init();
		curl_setopt($c,CURLOPT_URL,"http://$this->hostname/sync/csrf");
		curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
		$csrf = trim(curl_exec($c));

		curl_setopt($c,CURLOPT_URL,"http://$this->hostname/sync/request");
		curl_setopt($c,CURLOPT_POST,true);
		curl_setopt($c,CURLOPT_POSTFIELDS,"data=".rawurlencode($json)."&YII_CSRF_TOKEN=".YII_CSRF_TOKEN);
		if (isset(Yii::app()->params['sync_http_username']) && isset(Yii::app()->params['sync_http_password'])) {
			curl_setopt($c,CURLOPT_USERPWD,Yii::app()->params['sync_http_username'].":".Yii::app()->params['sync_http_password']);
		}
		return curl_exec($c);
	}
}
