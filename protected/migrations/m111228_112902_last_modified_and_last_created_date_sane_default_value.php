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

class m111228_112902_last_modified_and_last_created_date_sane_default_value extends CDbMigration
{
	public function up()
	{
		$this->alterColumn('address','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('authassignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('authitem','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('authitemchild','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('booking','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('cancellation_reason','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('cancelled_booking','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('cancelled_operation','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('common_ophthalmic_disorder','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('common_systemic_disorder','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('consultant','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('contact','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('contact_type','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('country','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('disorder','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_allergies','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_anterior_segment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_conclusion','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_cranial_nerves','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_diabetes_type','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_diagnosis','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_extraocular_movements','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_foh','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_gonioscopy','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_history','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_hpc','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_intraocular_pressure','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_letterout','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_medication','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_mini_refraction','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_nsc_grade','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_operation','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_orbital_examination','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_past_history','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_pmh','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_poh','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_posterior_segment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_referred_from_screening','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_registered_blind','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_social_history','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_type','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_visual_acuity','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_visual_fields','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_visual_function','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('episode','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('event','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('event_type','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('firm','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('firm_user_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('gp','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('letter_template','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('manual_contact','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('nsc_grade','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('opcs_code','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('operation_procedure_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('patient','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('patient_contact_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('phrase','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('phrase_by_firm','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('phrase_by_specialty','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('phrase_name','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('possible_element_type','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('proc','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('proc_opcs_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('proc_specialty_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('proc_specialty_subsection_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('referral','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('referral_episode_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('section','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('section_type','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('sequence','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('sequence_firm_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('service','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('service_specialty_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('session','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('site','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('site_element_type','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('specialty','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('specialty_subsection','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('tbl_migration','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('theatre','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('theatre_ward_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user_contact_assignment','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user_firm_rights','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user_service_rights','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user_session','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('ward','created_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
	}

	public function down()
	{
		$this->alterColumn('address','created_date','datetime NOT NULL');
		$this->alterColumn('authassignment','created_date','datetime NOT NULL');
		$this->alterColumn('authitem','created_date','datetime NOT NULL');
		$this->alterColumn('authitemchild','created_date','datetime NOT NULL');
		$this->alterColumn('booking','created_date','datetime NOT NULL');
		$this->alterColumn('cancellation_reason','created_date','datetime NOT NULL');
		$this->alterColumn('cancelled_booking','created_date','datetime NOT NULL');
		$this->alterColumn('cancelled_operation','created_date','datetime NOT NULL');
		$this->alterColumn('common_ophthalmic_disorder','created_date','datetime NOT NULL');
		$this->alterColumn('common_systemic_disorder','created_date','datetime NOT NULL');
		$this->alterColumn('consultant','created_date','datetime NOT NULL');
		$this->alterColumn('contact','created_date','datetime NOT NULL');
		$this->alterColumn('contact_type','created_date','datetime NOT NULL');
		$this->alterColumn('country','created_date','datetime NOT NULL');
		$this->alterColumn('disorder','created_date','datetime NOT NULL');
		$this->alterColumn('element_allergies','created_date','datetime NOT NULL');
		$this->alterColumn('element_anterior_segment','created_date','datetime NOT NULL');
		$this->alterColumn('element_conclusion','created_date','datetime NOT NULL');
		$this->alterColumn('element_cranial_nerves','created_date','datetime NOT NULL');
		$this->alterColumn('element_diabetes_type','created_date','datetime NOT NULL');
		$this->alterColumn('element_diagnosis','created_date','datetime NOT NULL');
		$this->alterColumn('element_extraocular_movements','created_date','datetime NOT NULL');
		$this->alterColumn('element_foh','created_date','datetime NOT NULL');
		$this->alterColumn('element_gonioscopy','created_date','datetime NOT NULL');
		$this->alterColumn('element_history','created_date','datetime NOT NULL');
		$this->alterColumn('element_hpc','created_date','datetime NOT NULL');
		$this->alterColumn('element_intraocular_pressure','created_date','datetime NOT NULL');
		$this->alterColumn('element_letterout','created_date','datetime NOT NULL');
		$this->alterColumn('element_medication','created_date','datetime NOT NULL');
		$this->alterColumn('element_mini_refraction','created_date','datetime NOT NULL');
		$this->alterColumn('element_nsc_grade','created_date','datetime NOT NULL');
		$this->alterColumn('element_operation','created_date','datetime NOT NULL');
		$this->alterColumn('element_orbital_examination','created_date','datetime NOT NULL');
		$this->alterColumn('element_past_history','created_date','datetime NOT NULL');
		$this->alterColumn('element_pmh','created_date','datetime NOT NULL');
		$this->alterColumn('element_poh','created_date','datetime NOT NULL');
		$this->alterColumn('element_posterior_segment','created_date','datetime NOT NULL');
		$this->alterColumn('element_referred_from_screening','created_date','datetime NOT NULL');
		$this->alterColumn('element_registered_blind','created_date','datetime NOT NULL');
		$this->alterColumn('element_social_history','created_date','datetime NOT NULL');
		$this->alterColumn('element_type','created_date','datetime NOT NULL');
		$this->alterColumn('element_visual_acuity','created_date','datetime NOT NULL');
		$this->alterColumn('element_visual_fields','created_date','datetime NOT NULL');
		$this->alterColumn('element_visual_function','created_date','datetime NOT NULL');
		$this->alterColumn('episode','created_date','datetime NOT NULL');
		$this->alterColumn('event','created_date','datetime NOT NULL');
		$this->alterColumn('event_type','created_date','datetime NOT NULL');
		$this->alterColumn('firm','created_date','datetime NOT NULL');
		$this->alterColumn('firm_user_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('gp','created_date','datetime NOT NULL');
		$this->alterColumn('letter_template','created_date','datetime NOT NULL');
		$this->alterColumn('manual_contact','created_date','datetime NOT NULL');
		$this->alterColumn('nsc_grade','created_date','datetime NOT NULL');
		$this->alterColumn('opcs_code','created_date','datetime NOT NULL');
		$this->alterColumn('operation_procedure_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('patient','created_date','datetime NOT NULL');
		$this->alterColumn('patient_contact_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('phrase','created_date','datetime NOT NULL');
		$this->alterColumn('phrase_by_firm','created_date','datetime NOT NULL');
		$this->alterColumn('phrase_by_specialty','created_date','datetime NOT NULL');
		$this->alterColumn('phrase_name','created_date','datetime NOT NULL');
		$this->alterColumn('possible_element_type','created_date','datetime NOT NULL');
		$this->alterColumn('proc','created_date','datetime NOT NULL');
		$this->alterColumn('proc_opcs_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('proc_specialty_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('proc_specialty_subsection_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('referral','created_date','datetime NOT NULL');
		$this->alterColumn('referral_episode_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('section','created_date','datetime NOT NULL');
		$this->alterColumn('section_type','created_date','datetime NOT NULL');
		$this->alterColumn('sequence','created_date','datetime NOT NULL');
		$this->alterColumn('sequence_firm_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('service','created_date','datetime NOT NULL');
		$this->alterColumn('service_specialty_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('session','created_date','datetime NOT NULL');
		$this->alterColumn('site','created_date','datetime NOT NULL');
		$this->alterColumn('site_element_type','created_date','datetime NOT NULL');
		$this->alterColumn('specialty','created_date','datetime NOT NULL');
		$this->alterColumn('specialty_subsection','created_date','datetime NOT NULL');
		$this->alterColumn('tbl_migration','created_date','datetime NOT NULL');
		$this->alterColumn('theatre','created_date','datetime NOT NULL');
		$this->alterColumn('theatre_ward_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('user','created_date','datetime NOT NULL');
		$this->alterColumn('user_contact_assignment','created_date','datetime NOT NULL');
		$this->alterColumn('user_firm_rights','created_date','datetime NOT NULL');
		$this->alterColumn('user_service_rights','created_date','datetime NOT NULL');
		$this->alterColumn('user_session','created_date','datetime NOT NULL');
		$this->alterColumn('ward','created_date','datetime NOT NULL');
	}
}
?>
