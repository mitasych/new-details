<?php
$this->breadcrumbs=array(
	Yii::t('main','Image Posts')=>array('index'),
	Yii::t('main','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('main','List ImagePost'),'url'=>array('index')),
	array('label'=>Yii::t('main','Create ImagePost'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('image-post-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('main','Manage Image Posts');?></h1>

<p>
<?php echo Yii::t('main','You may optionally enter a comparison operator'); ?>
 (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b><?php echo Yii::t('main',' or '); ?><b>=</b>) 
<?php echo Yii::t('main','at the beginning of each of your search values to specify how the comparison should be done.'); ?>
</p>

<?php echo CHtml::link(Yii::t('main','Advanced Search'),'#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'image-post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'description',
		'img',
		'create_time',
		'post_id',
		/*
		'main_image',
		'create_user_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
