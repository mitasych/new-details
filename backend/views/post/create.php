<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	Yii::t('main','Posts')=>array('index'),
	Yii::t('main','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Manage Post'), 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Create Post')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>