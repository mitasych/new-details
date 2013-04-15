<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'trans_title',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'main_image',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>600)); ?>

	<?php echo $form->textFieldRow($model,'create_user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'public_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'active',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'media_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'category_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'subcategory_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'front_slider',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'media_embed',array('class'=>'span5','maxlength'=>1000)); ?>

	<?php echo $form->textFieldRow($model,'count_view',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'color_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
