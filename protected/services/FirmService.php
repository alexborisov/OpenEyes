<?php
/**
 * (C) OpenEyes Foundation, 2014
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (C) 2014, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */

namespace services;

class FirmService extends DeclarativeModelService
{
	static protected $operations = array(self::OP_READ, self::OP_UPDATE, self::OP_DELETE, self::OP_CREATE, self::OP_SEARCH);

	static protected $search_params = array(
		'id' => self::TYPE_TOKEN,
		'identifier' => self::TYPE_TOKEN,
	);

	static protected $primary_model = 'Firm';

	static public $model_map = array(
		'Firm' => array(
			'related_objects' => array(
				'serviceSubspecialtyAssignment' => array('service_subspecialty_assignment_id', 'ServiceSubspecialtyAssignment', 'save' => 'no', 'children' => array(
					'subspecialty' => array('subspecialty_id', 'Subspecialty'),
				)),
			),
			'fields' => array(
				'name' => 'name',
				'subspecialty' => 'serviceSubspecialtyAssignment.subspecialty.name',
				'pas_code' => 'pas_code',
				'active' => 'active',
				'consultant_ref' => array(self::TYPE_REF, 'consultant_id', 'User'),
			),
		)
	);

	public function search(array $params)
	{
	}

	public function setModelAttributeFromResource(&$model, $attribute, $resource_value)
	{
		if ($attribute == 'serviceSubspecialtyAssignment.subspecialty.name') {
			if (!$subspecialty = \Subspecialty::model()->find('name=?',array($resource_value))) {
				throw new \Exception("Subspecialty not found: $resource_value");
			}

			$attribute = 'service_subspecialty_assignment_id';
			$resource_value = $subspecialty->serviceSubspecialtyAssignment->id;
		}

		parent::setModelAttributeFromResource($model, $attribute, $resource_value);
	}
}