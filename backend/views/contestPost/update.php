<?php
$this->breadcrumbs=array(
	Yii::t('main','Contest Posts')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('main','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create ContestPost'),'url'=>array('create')),
	array('label'=>Yii::t('main','View ContestPost'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('main','Manage ContestPost'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Update ContestPost #'); echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>