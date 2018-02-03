<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

 <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
<header class="masthead mb-auto">
	<div class="inner">
		<h3 class="masthead-brand"><?php echo Yii::app()->name; ?></h3>
		<?php $this->widget('CoverMainMenu'); ?>
	</div>
</header>

<main role="main" class="inner cover">
	<h1 class="cover-heading">WORKINGSPACE you will like</h1>
	<p class="lead">Full featured workingspace that makes you work productive.</p>
	<p class="lead">
  		<?php echo CHtml::link('Learn more', array('site/page','view' => 'about'), array('class' => 'btn btn-lg btn-secondary')); ?>
	</p>
</main>

<footer class="mastfoot mt-auto">
	<div class="inner">
  		<p>&copy; 2018 RAQ</p>
  		<p><small>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</small></p>
	</div>
</footer>
</div>