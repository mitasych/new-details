<?php
$this->breadcrumbs=array(
	Yii::t('main','Contest Media Types')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('main','Create ContestMediaType'),'url'=>array('create')),
	array('label'=>Yii::t('main','Update ContestMediaType'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('main','Delete ContestMediaType'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('main','Manage ContestMediaType'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','View ContestMediaType #'); echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'machine_name',
	),
)); ?>
