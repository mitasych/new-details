<?php
$this->breadcrumbs=array(
	Yii::t('main','Post Title Colors')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('main','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create PostTitleColor'),'url'=>array('create')),
	array('label'=>Yii::t('main','View PostTitleColor'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('main','Manage PostTitleColor'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Update PostTitleColor #'); echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>