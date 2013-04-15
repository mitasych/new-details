<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	Yii::t('main','Posts')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('main','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Post'), 'url'=>array('create')),
	array('label'=>Yii::t('main','View Post'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('main','Manage Post'), 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Update Post #'); echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>