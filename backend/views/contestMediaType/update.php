<?php
$this->breadcrumbs=array(
	Yii::t('main','Contest Media Types')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('main','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create ContestMediaType'),'url'=>array('create')),
	array('label'=>Yii::t('main','View ContestMediaType'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('main','Manage ContestMediaType'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Update ContestMediaType #'); echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>