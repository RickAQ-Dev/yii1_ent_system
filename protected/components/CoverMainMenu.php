<?php
class CoverMainMenu extends CWidget {

	public $items = array();

	public function init() {

		$this->items = array(
			array('label'=>'Home', 'url'=>array('/site/index'),'linkOptions' => array('class' => 'nav-link')),
			array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions' => array('class' => 'nav-link')),
			array('label'=>'Contact', 'url'=>array('/site/contact'),'linkOptions' => array('class' => 'nav-link')),
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions' => array('class' => 'nav-link','target' => 'login')),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions' => array('class' => 'nav-link'))
		);

	}

	public function run() {

		$this->render('CoverMainMenu/coverMainMenu', array(
			'items' => $this->items
		));

	}

}