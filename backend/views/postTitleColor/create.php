<?php
$this->breadcrumbs=array(
	Yii::t('main','Post Title Colors')=>array('index'),
	Yii::t('main','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Manage PostTitleColor'),'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('main','Create PostTitleColor')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>