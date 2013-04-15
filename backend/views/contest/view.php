<?php
$this->breadcrumbs=array(
	Yii::t('main','Contests')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Contest'),'url'=>array('create')),
	array('label'=>Yii::t('main','Update Contest'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('main','Delete Contest'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('main','Manage Contest'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','View Contest #'); echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
// 		'id',
		'name',
		'machine_name',
		'description',
		'short_description',
// 		'contest_media_type_id',
		array(
		'name'=>'contest_media_type_id',
		'type'=>'raw',
	//	'value'=>$model->mediaType,
),
		'create_user_id',
		'update_user_id',
		'create_time',
		'update_time',
		'start_time',
		'end_time',
		'winner_item_id',
		'winner_id',
	),
)); ?>
