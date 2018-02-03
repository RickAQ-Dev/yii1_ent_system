<?php
class AppWebUser extends CWebUser {

	public function init() {

		parent::init();

	}

	public function getAccount() {

		return $this->_loadModel($this->id);

	}

	private function _loadModel($id) {

		$model = Account::model()->find(array('condition' => 'email_address=:email_address', 'params' => array(':email_address'=>$id)));

		if($model === null)
			throw new Exception("Error Processing Request", 1);
			

		return $model;

	}

}