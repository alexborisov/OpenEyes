<?php

class m140521_150455_patient_history_rbac extends CDbMigration
{
	public function up()
	{
		$this->insert('authitem',array('name'=>'OprnEditSocialHistory', 'type' => 0));
		$this->insert('authitemchild',array('parent'=>'TaskEditPatientData','child'=>'OprnEditSocialHistory', 'type' => 1));
	}

	public function down()
	{

	}
}