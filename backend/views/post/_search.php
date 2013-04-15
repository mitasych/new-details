<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trans_title'); ?>
		<?php echo $form->textField($model,'trans_title',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'main_image'); ?>
		<?php echo $form->textField($model,'main_image',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'public_time'); ?>
		<?php echo $form->textField($model,'public_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'media_type'); ?>
		<?php echo $form->textField($model,'media_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subcategory_id'); ?>
		<?php echo $form->textField($model,'subcategory_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'front_slider'); ?>
		<?php echo $form->textField($model,'front_slider'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'media_embed'); ?>
		<?php echo $form->textField($model,'media_embed',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_view'); ?>
		<?php echo $form->textField($model,'count_view'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color_id'); ?>
		<?php echo $form->textField($model,'color_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('main','Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->