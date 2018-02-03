<?php
/* @var $this SiteController */

Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/about.css');
Yii::app()->clientScript->registerCssFile('https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css');
Yii::app()->clientScript->registerScriptFile('https://unpkg.com/feather-icons/dist/feather.min.js');

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<div class="row">
	<div class="col-md-12">
		<div id="about-carousel" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <div class="carousel-item-content text-left">
		      	<h1>Lorem Ipsum</h1>
		      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		      </div>
		    </div>
		    <div class="carousel-item">
		       <div class="carousel-item-content text-center">
		      	<h1>Lorem Ipsum</h1>
		      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		      </div>
		    </div>
		    <div class="carousel-item">
		       <div class="carousel-item-content text-right">
		      	<h1>Lorem Ipsum</h1>
		      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</div>
<br />
<br />
<h1>About</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<br />
<br />
<div class="row about-features">
	<div class="col-md-6 text-center animated fadeInLeft">
		<i data-feather="activity"></i>
	</div>
	<div class="col-md-6 animated bounceInUp">
		<h2>Lorem ipsum dolor</h2>
		<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

<div class="row about-features">
	<div class="col-md-6 animated bounceInUp">
		<h2>Lorem ipsum dolor</h2>
		<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="col-md-6 text-center animated fadeInRight">
		<i data-feather="book"></i>
	</div>
</div>

<div class="row about-features">
	<div class="col-md-6 text-center animated fadeInLeft"><i data-feather="clipboard"></i></div>
	<div class="col-md-6 animated bounceInUp">
		<h2>Lorem ipsum dolor</h2>
		<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

<?php  Yii::app()->clientScript->registerScript('featherjs', "feather.replace()");  ?>