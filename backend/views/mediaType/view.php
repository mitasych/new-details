<?php
$this->breadcrumbs=array(
	Yii::t('main','Media Types')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('main','Create MediaType'),'url'=>array('create')),
	array('label'=>Yii::t('main','Update MediaType'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('main','Delete MediaType'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('main','Manage MediaType'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','View MediaType #'); echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'machine_name',
	),
)); ?>
