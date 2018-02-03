<?php
class Profile extends CWidget {

	private $_user;

	public function init() {

		$this->_user = Yii::app()->user;

	}

	public function run() {

		$this->render('Profile/profile', array(
			'user' => $this->_user
		));

	}

}