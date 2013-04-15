<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'image-post-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
				'enctype' => 'multipart/form-data'
			),
)); ?>

	<p class="help-block"><?php echo Yii::t('main','Fields with ') ?><span class="required">*</span>
	<?php echo Yii::t('main',' are required.') ?></p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->fileFieldRow($model,'img',array('class'=>'span5','maxlength'=>256)); ?>

	<?php // echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'post_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'main_image',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'create_user_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('main','Create') : Yii::t('main','Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
