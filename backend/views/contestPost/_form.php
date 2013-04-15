<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'contest-post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('main','Fields with ') ?><span class="required">*</span>
	<?php echo Yii::t('main',' are required.') ?></p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'trans_title',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'main_image',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>3, 'cols'=>50, 'class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'create_user_id',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'update_user_id',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'update_time',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'active',array('class'=>'span5')); ?>
	<?php echo $form->checkBoxRow($model,'active'); ?>

	<?php //echo $form->textFieldRow($model,'contest_media_type_id',array('class'=>'span5')); ?>
	<?php echo $form->dropDownListRow($model, 'contest_media_type_id', 
			ContestMediaType::listItems(), array('class'=>'span2')); ?>

	<?php echo $form->textFieldRow($model,'media_embed',array('class'=>'span5','maxlength'=>1000)); ?>

	<?php echo $form->textFieldRow($model,'count_view',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'contest_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('main','Create') : Yii::t('main','Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
