<?php
$this->breadcrumbs=array(
	Yii::t('main','Contest Posts')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('main','Create ContestPost'),'url'=>array('create')),
	array('label'=>Yii::t('main','Update ContestPost'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('main','Delete ContestPost'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('main','Manage ContestPost'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','View ContestPost #'); echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'trans_title',
		'main_image',
		'content',
		'description',
		'create_user_id',
		'update_user_id',
		'create_time',
		'update_time',
		'public_time',
		'active',
		'contest_media_type_id',
		'media_embed',
		'count_view',
		'contest_id',
	),
)); ?>
