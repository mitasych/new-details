<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'contest-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('main','Fields with ') ?><span class="required">*</span>
	<?php echo Yii::t('main',' are required.') ?></p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'machine_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'short_description',array('rows'=>3, 'cols'=>50, 'class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model, 'contest_media_type_id', 
			ContestMediaType::listItems(), array('class'=>'span2')); ?>

	<?php //echo $form->textFieldRow($model,'create_user_id',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'update_user_id',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'update_time',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'start_time',array('class'=>'span5')); ?>
	<?php echo $form->labelEx($model,'start_time'); ?>
	<?php 
		if ($model->isNewRecord) {
			$model->start_time=date('Y-m-d H:i:s');
		}
		
		
	?>
	<?php Yii::import('common.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
   			 $this->widget('CJuiDateTimePicker',array(
       					'model'=>$model, //Model object
        				'attribute'=>'start_time', //attribute name
            		    'mode'=>'datetime', //use "time","date" or "datetime" (default)
      					'options'=>array(
									"dateFormat"=>'yy-mm-dd',
									"timeFormat"=>'hh:mm:ss',
									"timeText"=>"Время",
									"hourText"=>"Часы",
									"minuteText"=>"Минуты",
									),
						'language' => 'ru',
						)
		  	);
		?>
	<?php echo $form->error($model,'start_time'); ?>
	
	<?php //echo $form->textFieldRow($model,'end_time',array('class'=>'span5')); ?>
		<?php echo $form->labelEx($model,'end_time'); ?>
		<?php if ($model->isNewRecord) {
			$model->end_time=date('Y-m-d H:i:s', 
				mktime(date('H'), date('i'), date('s')+(60*60*24), date("m") , date("d"), date("Y"))); 
			} ?>
	<?php Yii::import('common.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
   			 $this->widget('CJuiDateTimePicker',array(
       					'model'=>$model, //Model object
        				'attribute'=>'end_time', //attribute name
            		    'mode'=>'datetime', //use "time","date" or "datetime" (default)
      					'options'=>array(
									"dateFormat"=>'yy-mm-dd',
									"timeFormat"=>'hh:mm:ss',
									"timeText"=>"Время",
									"hourText"=>"Часы",
									"minuteText"=>"Минуты",
									),
						'language' => 'ru',
						)
		  	);
		?>
	<?php echo $form->error($model,'end_time'); ?>

	<?php echo $form->textFieldRow($model,'winner_item_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'winner_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('main','Create') : Yii::t('main','Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
