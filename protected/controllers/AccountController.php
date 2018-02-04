<?php

class AccountController extends AccAccountController
{

	public $layout = '//layouts/dashboard';

	public function actionIndex()
	{
		parent::actionIndex();
	}

	public function actionSignUp() {

		$this->layout = '//layouts/page';

		parent::actionSignUp();

	}

	public function actionSecurity() {

		$this->layout = '//layouts/settings';

		parent::actionSecurity();

	}

	public function actionUpdateEmailAddress() {

		Yii::app()->user->returnUrl = array('account/security');

		parent::actionUpdateEmailAddress();

	}

	public function actionChangePassword() {

		Yii::app()->user->returnUrl = array('account/security');		

		parent::actionChangePassword();

	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}