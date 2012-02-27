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

class m111228_132728_add_default_to_last_modified_date extends CDbMigration
{
	public function up()
	{
		$this->alterColumn('address','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('authassignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('authitem','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('authitemchild','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('booking','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('cancellation_reason','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('cancelled_booking','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('cancelled_operation','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('common_ophthalmic_disorder','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('common_systemic_disorder','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('consultant','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('contact','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('contact_type','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('country','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('disorder','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_allergies','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_anterior_segment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_conclusion','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_cranial_nerves','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_diabetes_type','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_diagnosis','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_extraocular_movements','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_foh','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_gonioscopy','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_history','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_hpc','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_intraocular_pressure','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_letterout','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_medication','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_mini_refraction','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_nsc_grade','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_operation','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_orbital_examination','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_past_history','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_pmh','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_poh','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_posterior_segment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_referred_from_screening','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_registered_blind','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_social_history','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_type','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_visual_acuity','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_visual_fields','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('element_visual_function','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('episode','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('event','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('event_type','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('firm','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('firm_user_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('gp','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('letter_template','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('manual_contact','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('nsc_grade','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('opcs_code','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('operation_procedure_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('patient','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('patient_contact_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('phrase','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('phrase_by_firm','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('phrase_by_specialty','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('phrase_name','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('possible_element_type','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('proc','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('proc_opcs_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('proc_specialty_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('proc_specialty_subsection_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('referral','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('referral_episode_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('section','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('section_type','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('sequence','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('sequence_firm_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('service','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('service_specialty_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('session','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('site','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('site_element_type','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('specialty','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('specialty_subsection','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('tbl_migration','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('theatre','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('theatre_ward_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user_contact_assignment','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user_firm_rights','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user_service_rights','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('user_session','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
		$this->alterColumn('ward','last_modified_date','datetime NOT NULL DEFAULT \'1900-01-01 00:00:00\'');
	}

	public function down()
	{
		$this->alterColumn('address','last_modified_date','datetime NOT NULL');
		$this->alterColumn('authassignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('authitem','last_modified_date','datetime NOT NULL');
		$this->alterColumn('authitemchild','last_modified_date','datetime NOT NULL');
		$this->alterColumn('booking','last_modified_date','datetime NOT NULL');
		$this->alterColumn('cancellation_reason','last_modified_date','datetime NOT NULL');
		$this->alterColumn('cancelled_booking','last_modified_date','datetime NOT NULL');
		$this->alterColumn('cancelled_operation','last_modified_date','datetime NOT NULL');
		$this->alterColumn('common_ophthalmic_disorder','last_modified_date','datetime NOT NULL');
		$this->alterColumn('common_systemic_disorder','last_modified_date','datetime NOT NULL');
		$this->alterColumn('consultant','last_modified_date','datetime NOT NULL');
		$this->alterColumn('contact','last_modified_date','datetime NOT NULL');
		$this->alterColumn('contact_type','last_modified_date','datetime NOT NULL');
		$this->alterColumn('country','last_modified_date','datetime NOT NULL');
		$this->alterColumn('disorder','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_allergies','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_anterior_segment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_conclusion','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_cranial_nerves','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_diabetes_type','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_diagnosis','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_extraocular_movements','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_foh','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_gonioscopy','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_history','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_hpc','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_intraocular_pressure','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_letterout','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_medication','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_mini_refraction','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_nsc_grade','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_operation','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_orbital_examination','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_past_history','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_pmh','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_poh','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_posterior_segment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_referred_from_screening','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_registered_blind','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_social_history','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_type','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_visual_acuity','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_visual_fields','last_modified_date','datetime NOT NULL');
		$this->alterColumn('element_visual_function','last_modified_date','datetime NOT NULL');
		$this->alterColumn('episode','last_modified_date','datetime NOT NULL');
		$this->alterColumn('event','last_modified_date','datetime NOT NULL');
		$this->alterColumn('event_type','last_modified_date','datetime NOT NULL');
		$this->alterColumn('firm','last_modified_date','datetime NOT NULL');
		$this->alterColumn('firm_user_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('gp','last_modified_date','datetime NOT NULL');
		$this->alterColumn('letter_template','last_modified_date','datetime NOT NULL');
		$this->alterColumn('manual_contact','last_modified_date','datetime NOT NULL');
		$this->alterColumn('nsc_grade','last_modified_date','datetime NOT NULL');
		$this->alterColumn('opcs_code','last_modified_date','datetime NOT NULL');
		$this->alterColumn('operation_procedure_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('patient','last_modified_date','datetime NOT NULL');
		$this->alterColumn('patient_contact_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('phrase','last_modified_date','datetime NOT NULL');
		$this->alterColumn('phrase_by_firm','last_modified_date','datetime NOT NULL');
		$this->alterColumn('phrase_by_specialty','last_modified_date','datetime NOT NULL');
		$this->alterColumn('phrase_name','last_modified_date','datetime NOT NULL');
		$this->alterColumn('possible_element_type','last_modified_date','datetime NOT NULL');
		$this->alterColumn('proc','last_modified_date','datetime NOT NULL');
		$this->alterColumn('proc_opcs_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('proc_specialty_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('proc_specialty_subsection_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('referral','last_modified_date','datetime NOT NULL');
		$this->alterColumn('referral_episode_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('section','last_modified_date','datetime NOT NULL');
		$this->alterColumn('section_type','last_modified_date','datetime NOT NULL');
		$this->alterColumn('sequence','last_modified_date','datetime NOT NULL');
		$this->alterColumn('sequence_firm_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('service','last_modified_date','datetime NOT NULL');
		$this->alterColumn('service_specialty_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('session','last_modified_date','datetime NOT NULL');
		$this->alterColumn('site','last_modified_date','datetime NOT NULL');
		$this->alterColumn('site_element_type','last_modified_date','datetime NOT NULL');
		$this->alterColumn('specialty','last_modified_date','datetime NOT NULL');
		$this->alterColumn('specialty_subsection','last_modified_date','datetime NOT NULL');
		$this->alterColumn('tbl_migration','last_modified_date','datetime NOT NULL');
		$this->alterColumn('theatre','last_modified_date','datetime NOT NULL');
		$this->alterColumn('theatre_ward_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('user','last_modified_date','datetime NOT NULL');
		$this->alterColumn('user_contact_assignment','last_modified_date','datetime NOT NULL');
		$this->alterColumn('user_firm_rights','last_modified_date','datetime NOT NULL');
		$this->alterColumn('user_service_rights','last_modified_date','datetime NOT NULL');
		$this->alterColumn('user_session','last_modified_date','datetime NOT NULL');
		$this->alterColumn('ward','last_modified_date','datetime NOT NULL');
	}
}
?>
