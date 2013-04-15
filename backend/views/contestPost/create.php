<?php
$this->breadcrumbs=array(
	Yii::t('main','Contest Posts')=>array('index'),
	Yii::t('main','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Manage ContestPost'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Create ContestPost')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>