<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trans_title')); ?>:</b>
	<?php echo CHtml::encode($data->trans_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('main_image')); ?>:</b>
	<?php echo CHtml::encode($data->main_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('public_time')); ?>:</b>
	<?php echo CHtml::encode($data->public_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('media_type')); ?>:</b>
	<?php echo CHtml::encode($data->media_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subcategory_id')); ?>:</b>
	<?php echo CHtml::encode($data->subcategory_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('front_slider')); ?>:</b>
	<?php echo CHtml::encode($data->front_slider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('media_embed')); ?>:</b>
	<?php echo CHtml::encode($data->media_embed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_view')); ?>:</b>
	<?php echo CHtml::encode($data->count_view); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color_id')); ?>:</b>
	<?php echo CHtml::encode($data->color_id); ?>
	<br />

	*/ ?>

</div>