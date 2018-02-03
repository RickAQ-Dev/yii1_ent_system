<?php
class SystemMainMenu extends CCNavigationWidget {

	public $items = array();
	public $options = array();

	public function init(){

		$user = Yii::app()->user;

		$this->items = array(
			array('label'=>'Home', 'url'=>array('/site/index'),'linkOptions' => array('class' => 'nav-link')),
			array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions' => array('class' => 'nav-link')),
			array('label'=>'Contact', 'url'=>array('/site/contact'),'linkOptions' => array('class' => 'nav-link')),
		);

		if($user->isGuest)
			$this->items[] = array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions' => array('class' => 'nav-link','target' => 'login'));
		else
			$this->items[] = array('label'=>'Dashboard ('.$user->account->user->first_name.')', 'url'=>array('/dashboard/index'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions' => array('class' => 'nav-link'));

		$this->options = array(
			'items'=>$this->items,
			'itemCssClass' => 'nav-item',
			'activeCssClass' => 'active',
			'htmlOptions' => array(
				'class' => 'navbar-nav'
			)
		);

	}

	public function run() {

		$this->render('SystemMainMenu/systemMainMenu', array(
			'items' => $this->items,
			'options' => $this->options
		));

	}

}