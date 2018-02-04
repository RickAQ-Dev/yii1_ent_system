<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/form-custom.css');

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1 class="text-center">Contact Us</h1>
<br />
<br />
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">

		<p>
		If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
		</p>
		
		<div class="form">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'contact-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<?php echo $form->errorSummary($model); ?>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'name'); ?>
						<?php echo $form->textField($model,'name', array('class' =>'form-control')); ?>
						<?php echo $form->error($model,'name'); ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'email'); ?>
						<?php echo $form->textField($model,'email', array('class' =>'form-control')); ?>
						<?php echo $form->error($model,'email'); ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'subject'); ?>
						<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128, 'class' =>'form-control')); ?>
						<?php echo $form->error($model,'subject'); ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<?php echo $form->labelEx($model,'body'); ?>
						<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'class' =>'form-control')); ?>
						<?php echo $form->error($model,'body'); ?>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-md-12">
					<?php if(CCaptcha::checkRequirements()): ?>
						
						<div class="row">
							<div class="col-md-6"><?php echo $form->labelEx($model,'verifyCode'); ?></div>
							<div class="col-md-6"><?php $this->widget('CCaptcha'); ?></div>
							<div class="col-md-6">
								<div class="hint">Please enter the letters as they are shown in the image above.
									<br/>Letters are not case-sensitive.
								</div>
							</div>
							<div class="col-md-6"><?php echo $form->textField($model,'verifyCode', array('class' => 'form-control')); ?></div>
						</div>
						
						<?php echo $form->error($model,'verifyCode'); ?>
					<?php endif; ?>
				</div>
			</div>

			<br />
			<br />
			
			<div class="row">
				<div class="col-md-12 text-center">
					<?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-lg btn-primary')); ?>
				</div>
			</div>

			<br />
			<br />

		<?php $this->endWidget(); ?>

		</div><!-- form -->

	</div>
	<div class="col-md-3"></div>
</div>

<?php endif; ?>