<?php
$this->breadcrumbs=array(
	Yii::t('main','Contest Media Types')=>array('index'),
	Yii::t('main','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Manage ContestMediaType'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Create ContestMediaType')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>