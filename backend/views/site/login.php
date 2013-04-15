<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	Yii::t('main','Login'),
);
?>

<p><?php echo Yii::t('main','Please fill out the following form with your login credentials:')?></p>

<div class="form">
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	//'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'well'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?php echo Yii::t('main','Fields with ') ?><span class="required">*</span>
	<?php echo Yii::t('main',' are required.') ?></p>
	<?php 	//echo '<b>'.__FILE__.' -- '.__LINE__.'</b><pre>'; var_dump($model); echo'</pre>';die;?>
	<?php echo $form->textFieldRow($model, 'username', array('class'=>'span3'));?>
	<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3'));?>
	<?php echo $form->checkBoxRow($model, 'rememberMe');?>
	<?php if($er == true): ?>
		<?php echo $form->captchaRow($model, 'verifyCode');?>
	<?php endif; ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','type'=>'primary','label'=>Yii::t('labels', 'Submit'), 'icon'=>'ok'));?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset','label'=>Yii::t('labels', 'Reset')));?>
	</div>

	<?php $this->endWidget(); ?>
</div><!-- form -->
