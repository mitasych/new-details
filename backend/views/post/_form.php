<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('main','Fields with ') ?>
	<span class="required">*</span><?php echo Yii::t('main',' are required.') ?></p>

	<?php echo $form->errorSummary($model); ?>

<!-- 	<div class="row"> -->
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id'); ?>
		<?php //echo $form->error($model,'id'); ?>
<!-- 	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trans_title'); ?>
		<?php echo $form->textField($model,'trans_title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'trans_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'main_image'); ?>
		<?php // echo $form->textField($model,'main_image',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->fileField($model, 'main_image'); ?>
		<?php echo $form->error($model,'main_image'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'content'); ?>
		<?php echo $form->ckEditorRow($model, 'content', array(
														'options'=>array(
																'fullpage'=>'js:true', 
																'width'=>'640', 
																'resize_maxWidth'=>'640',
																'resize_minWidth'=>'320',
																'filebrowserImageBrowseUrl' => '/admin/imagePost/',
																//'filebrowserImageUploadUrl' => '/admin/imagePost/create/',
																)
														)
				);?>
		<?php // echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

		<div class="row">
		<?php echo $form->labelEx($model,'meta_keywords'); ?>
		<?php echo $form->textField($model,'meta_keywords',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'meta_keywords'); ?>
	</div>
	
		<div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textField($model,'meta_description',array('size'=>60,'maxlength'=>600)); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>
		
<!-- 	<div class="row"> -->
		<?php //echo $form->labelEx($model,'create_user_id'); ?>
		<?php //echo $form->textField($model,'create_user_id'); ?>
		<?php //echo $form->error($model,'create_user_id'); ?>
<!-- 	</div> -->

<!-- 	<div class="row"> -->
		<?php //echo $form->labelEx($model,'update_user_id'); ?>
		<?php //echo $form->textField($model,'update_user_id'); ?>
		<?php //echo $form->error($model,'update_user_id'); ?>
<!-- 	</div> -->

<!-- 	<div class="row"> -->
		<?php //echo $form->labelEx($model,'create_time'); ?>
		<?php //echo $form->textField($model,'create_time'); ?>
		<?php //echo $form->error($model,'create_time'); ?>
<!-- 	</div> -->

<!-- 	<div class="row"> -->
		<?php //echo $form->labelEx($model,'update_time'); ?>
		<?php //echo $form->textField($model,'update_time'); ?>
		<?php //echo $form->error($model,'update_time'); ?>
<!-- 	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'public_time'); ?>
		<?php //echo $form->textField($model,'public_time'); ?>
		
		<?php Yii::import('common.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
   			 $this->widget('CJuiDateTimePicker',array(
       					'model'=>$model, //Model object
        				'attribute'=>'public_time', //attribute name
            		    'mode'=>'datetime', //use "time","date" or "datetime" (default)
      					'options'=>array(
									"dateFormat"=>'yy-mm-dd',
									"timeFormat"=>'hh:mm:ss',
									"timeText"=>"Время",
									"hourText"=>"Часы",
									"minuteText"=>"Минуты",
									), // jquery plugin options
						'language' => 'ru',
						) // jquery plugin options
		  	);
		?>
		
		<?php echo $form->error($model,'public_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'media_type'); ?>
		<?php echo $form->ListBox($model,'arMedia', MediaType::listItems(), array('multiple'=>'multiple')); ?>
		<?php echo $form->error($model,'media_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model, 'category_id', Category::listItems()); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subcategory_id'); ?>
		<?php echo $form->textField($model,'subcategory_id'); ?>
		<?php echo $form->error($model,'subcategory_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'front_slider'); ?>
		<?php echo $form->checkBox($model,'front_slider'); ?>
		<?php echo $form->error($model,'front_slider'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'media_embed'); ?>
		<?php echo $form->textField($model,'media_embed',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'media_embed'); ?>
	</div>

<!-- 	<div class="row"> -->
		<?php //echo $form->labelEx($model,'count_view'); ?>
		<?php //echo $form->textField($model,'count_view'); ?>
		<?php //echo $form->error($model,'count_view'); ?>
<!-- 	</div> -->
		
	<div class="row">
		<?php echo $form->labelEx($model,'color_id'); ?>
		<?php echo $form->dropDownList($model, 'color_id', PostTitleColor::listItems()); ?>
		<?php echo $form->error($model,'color_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('main','Create') : Yii::t('main','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->