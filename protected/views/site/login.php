<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
    'htmlOptions' => array(
        'class' => 'form-signin'
    )
)); ?>

    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

    <div class="row">
        <label for="inputEmail" class="sr-only">Email address</label>
        <?php echo $form->textField($model,'username', array('class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email Address', 'autofocus' => 1)); ?>
        
    </div>

    <div class="row">
        <label for="inputPassword" class="sr-only">Password</label>
        <?php echo $form->passwordField($model,'password',array('class' => 'form-control', 'placeholder' => 'Password')); ?>
    </div>

    <div class="row rememberMe">
    	<div class="checkbox mb-3">
	        <?php echo $form->checkBox($model,'rememberMe'); ?>
	        <?php echo $form->label($model,'rememberMe'); ?>
    	</div>
    </div>

    <?php echo CHtml::hiddenField('returnUrl', Yii::app()->createUrl('dashboard/index')); ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Sign In', array('class' => 'btn btn-lg btn-primary btn-block')); ?>
    </div>

    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>

<?php $this->endWidget(); ?>