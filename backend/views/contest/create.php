<?php
$this->breadcrumbs=array(
	Yii::t('main','Contests')=>array('index'),
	Yii::t('main','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Manage Contest'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Create Contest');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>