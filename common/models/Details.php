<?php

class Details extends CActiveRecord
{
	protected function beforeValidate()
	{
		if($this->isNewRecord)
		{
			// set the create date, last updated date and the user doing the creating
			if ($this->hasAttribute('create_time') && (!$this->create_time || empty($this->create_time))) {
				$this->create_time=date('Y-m-d H:i:s');
			}
			if ($this->hasAttribute('update_time') && (!$this->update_time || empty($this->update_time))) {
				$this->update_time=date('Y-m-d H:i:s');
			}
			if ($this->hasAttribute('create_user_id') && (!$this->create_user_id || empty($this->create_user_id))) {
				$this->create_user_id=Yii::app()->user->id;
			}
				
			if ($this->hasAttribute('update_user_id') && (!$this->update_user_id || empty($this->update_user_id))) {
				$this->update_user_id=Yii::app()->user->id;
			}
				
			if ($this->hasAttribute('meta_description') && (!$this->meta_description || empty($this->meta_description))) {
				$this->meta_description=mb_substr($this->content, 0, 600, 'utf-8');
				$this->meta_description=implode(' ', explode(' ', $this->meta_description, -1));
			}
				
		}
		else
		{
			//not a new record, so just set the last updated time and last updated user id
			if ($this->hasAttribute('update_time')) {
				$this->update_time=date('Y-m-d H:i:s');
			}
			if ($this->hasAttribute('update_user_id')) {
				$this->update_user_id=Yii::app()->user->id;
			}
				
		}
		
// 		if ($this->hasAttribute('trans_title') && (!$this->trans_title || empty($this->trans_title))) {
		if ($this->hasAttribute('trans_title')) {
			$this->trans_title=Translite::rusencode($this->title, '-');
		}
		return parent::beforeValidate();
	}
}