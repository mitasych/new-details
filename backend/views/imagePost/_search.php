<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'img',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'post_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'main_image',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_user_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>Yii::t('main','Search'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
