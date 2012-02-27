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

?><div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firm_id')); ?>:</b>
	<?php echo CHtml::encode($data->getFirmName()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theatre_id')); ?>:</b>
	<?php echo CHtml::encode($data->theatre->site->short_name . ' - ' . $data->theatre->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date . ' (' . date('l', strtotime($data->start_date)) . ')'); ?>
	<br />

	<b><?php echo CHtml::encode('Time:'); ?>:</b>
	<?php echo CHtml::encode(substr($data->start_time, 0, 5) . '-' . substr($data->end_time, 0, 5)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repeat_interval')); ?>:</b>
	<?php echo !empty($data->week_selection) ? CHtml::encode($data->getWeekText()) : CHtml::encode($data->getFrequencyText()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weekday')); ?>:</b>
	<?php echo CHtml::encode($data->getWeekdayText()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consultant')); ?>:</b>
	<?php echo ($data->consultant) ? 'Yes' : 'No'; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paediatric')); ?>:</b>
	<?php echo ($data->paediatric) ? 'Yes' : 'No'; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anaesthetist')); ?>:</b>
	<?php echo ($data->anaesthetist) ? 'Yes' : 'No'; ?>
	<br />

</div>
