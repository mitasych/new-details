<?php
$this->breadcrumbs=array(
	Yii::t('main','Contests')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('main','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Contest'),'url'=>array('create')),
	array('label'=>Yii::t('main','View Contest'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('main','Manage Contest'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Update Contest #'); echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>