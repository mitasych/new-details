<?php
$this->breadcrumbs=array(
	Yii::t('main','Image Posts')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('main','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('main','List ImagePost'),'url'=>array('index')),
	array('label'=>Yii::t('main','Create ImagePost'),'url'=>array('create')),
	array('label'=>Yii::t('main','View ImagePost'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('main','Manage ImagePost'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('main','Update ImagePost #'); echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>