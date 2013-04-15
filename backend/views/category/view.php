<?php
$this->breadcrumbs=array(
	Yii::t('main','Categories')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Category'),'url'=>array('create')),
	array('label'=>Yii::t('main','Update Category'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('main','Delete Category'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('main','Manage Category'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','View Category #'); echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'machine_name',
	),
)); ?>
