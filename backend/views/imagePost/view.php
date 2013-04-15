<?php
$this->breadcrumbs=array(
	Yii::t('main','Image Posts')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('main','List ImagePost'),'url'=>array('index')),
	array('label'=>Yii::t('main','Create ImagePost'),'url'=>array('create')),
	array('label'=>Yii::t('main','Update ImagePost'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('main','Delete ImagePost'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('main','Manage ImagePost'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('main','View ImagePost #'); echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		array(
				'name'=>'img',
				'type'=>'html',
				'value'=>CHtml::image('/image/uploaded/thumb/'.$model->img)
			),
		'create_time',
		'post_id',
		'main_image',
		'create_user_id',
	),
)); ?>
