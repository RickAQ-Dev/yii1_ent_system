<?php 
	
	$baseUrl = Yii::app()->request->baseUrl;
	$clientScript = Yii::app()->clientScript;

	$clientScript->registerCssFile($baseUrl.'/css/profile.css');

?>

<div class="col-md-12">
	<div class="profile row">
		<div class="col-md-4">
			<div class="profile-img">
				<?php echo CHtml::link('<img data-feather="user">', array('user/profile')); ?>
			</div>
		</div>	
		<div class="col-md-8">
			<div class="profile-info">
				<span>Rick AQ</span>
			</div>
		</div>
	</div>	
</div>

