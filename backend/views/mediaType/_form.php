<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'media-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('main','Fields with ') ?><span class="required">*</span>
	<?php echo Yii::t('main',' are required.') ?></p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'machine_name',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('main','Create') : Yii::t('main','Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
