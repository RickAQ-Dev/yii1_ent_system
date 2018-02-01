<?php
class PageMainMenu extends SystemMainMenu {

	public function init() {

		parent::init();

		$this->options = array(
			'items'=>$this->items,
			'itemCssClass' => 'nav-item',
			'activeCssClass' => 'active',
			'htmlOptions' => array(
				'class' => 'navbar-nav mr-auto'
			)
		);
	}

	public function run() {

		$this->render('PageMainMenu/pageMainMenu', array(
			'items' => $this->items,
			'options' => $this->options
		));

	}

}