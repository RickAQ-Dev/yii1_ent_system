<?php
class SettingNavigation extends CCNavigationWidget {
	
	public function init() {

		parent::init();

		$user = Yii::app()->user;

		$this->items = array(
			array('label'=>'<i data-feather="user"></i> Information', 'url'=>array('/user/information'),'linkOptions' => array('class' => 'nav-link'),'encodeLabel' => false),
			array('label'=>'<i data-feather="shield"></i> Security', 'url'=>array('/account/security'),'linkOptions' => array('class' => 'nav-link'),'encodeLabel' => false),
			// array('label'=>'Contact', 'url'=>array('/site/contact'),'linkOptions' => array('class' => 'nav-link')),
		);

		$this->options = array(
			'id' => 'setting-nav',
			'items'=>$this->items,
			'itemCssClass' => 'nav-item',
			'activeCssClass' => 'active',
			'htmlOptions' => array(
				'class' => 'nav flex-column sidebar-sticky bg-light sidebar'
			)
		);
	}

	public function run() {

		$this->render('SettingNavigation/settingNavigation', array(
			'options' => $this->options
		));

	}

}