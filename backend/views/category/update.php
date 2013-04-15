<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('main','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Category'),'url'=>array('create')),
	array('label'=>Yii::t('main','View Category'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('main','Manage Category'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Update Category #'); echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>