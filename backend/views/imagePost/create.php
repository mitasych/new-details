<?php
$this->breadcrumbs=array(
	Yii::t('main','Image Posts')=>array('index'),
	Yii::t('main','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('main','List ImagePost'),'url'=>array('index')),
	array('label'=>Yii::t('main','Manage ImagePost'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('main','Create ImagePost')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>