<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	Yii::t('main','Posts')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Post'), 'url'=>array('create')),
	array('label'=>Yii::t('main','Update Post'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('main','Delete Post'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('main','Manage Post'), 'url'=>array('index')), // ..was 'admin'
);
?>

<h1><?php echo Yii::t('main','View Post #'); echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'trans_title',
		'main_image',
		'content',
		'description',
		array(
			'name'=>'create_user_id',
			'type'=>'raw',
			'value'=>CHtml::link($model->createUser->username,array('/user/'.$model->create_user_id)),	
		),
		array(
		'name'=>'update_user_id',
		'type'=>'raw',
		'value'=>CHtml::link($model->updateUser->username,array('/user/'.$model->update_user_id)),
		),
		'create_time',
		'update_time',
		'public_time',
		array(
		'name'=>'active',
		'type'=>'boolean',
		'value'=>$model->active,
		),
		//'media_type',
		array(
		'name'=>'media_type',
		'type'=>'raw',
		'value'=>$model->mediaTypes,
		),
		array(
		'name'=>'category_id',
		'type'=>'raw',
		'value'=>$model->category->title,
		),
		'subcategory_id',
		array(
		'name'=>'front_slider',
		'type'=>'boolean',
		'value'=>$model->front_slider,
		),
		'media_embed',
		'count_view',
		array(
		'name'=>'color_id',
		'type'=>'raw',
		'value'=>$model->titleColor->name,
		),
	),
)); ?>
