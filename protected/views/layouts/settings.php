<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/dashboard'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2>Settings</h2>
		</div>
		<div class="col-md-2">
			<?php $this->widget('SettingNavigation'); ?>
		</div>
		<div class="col-md-10">
			<?php echo $content; ?>
		</div>
	</div>
</div><!-- content -->
<?php $this->endContent(); ?>