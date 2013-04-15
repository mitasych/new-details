<?php
$this->breadcrumbs=array(
	Yii::t('main','Media Types')=>array('index'),
	Yii::t('main','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Manage MediaType'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Create MediaType')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>