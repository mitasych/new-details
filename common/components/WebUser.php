<?php

class WebUser extends CWebUser
{
	private $_model = null;
	
	public function getRole()
	{
		if ($user = $this->getModel()) {
			return $this->_model->role->machine_name;
		}
	}
	
	public function getModel()
	{
		if (!$this->isGuest && $this->_model === null) {
			$this->_model = User::model()->findByPk($this->id, array('select'=>'role_id'));
		}
		
		return $this->_model;
	}
}