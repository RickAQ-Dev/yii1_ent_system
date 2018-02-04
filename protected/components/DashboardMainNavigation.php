<?php
class DashboardMainNavigation extends CCNavigationWidget {

	public function init() {

		$this->items = array(
			array('label'=>'<span data-feather="activity"></span> Overview', 'url'=>array('/dashboard/index'),'linkOptions' => array('class' => 'nav-link'), 'encodeLabel' => false),
			array('label'=>'<span data-feather="list"></span> To Do', 'url'=>array('/todo/index'),'linkOptions' => array('class' => 'nav-link'), 'encodeLabel' => false),
			/*array('label'=>'<span data-feather="clock"></span> Reminders', 'url'=>array('/todo/index'),'linkOptions' => array('class' => 'nav-link'), 'encodeLabel' => false),
			array('label'=>'<span data-feather="book"></span> Notes', 'url'=>array('/todo/index'),'linkOptions' => array('class' => 'nav-link'), 'encodeLabel' => false),*/
		);

		$this->options = array(
			'items'=>$this->items,
			'itemCssClass' => 'nav-item',
			'activeCssClass' => 'active',
			'htmlOptions' => array(
				'class' => 'nav flex-column'
			)
		);

	}

	public function run() {

		$this->render('DashboardMainNavigation/dashboardMainNavigation', array(
			'options' => $this->options
		));

	}

}