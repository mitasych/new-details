<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	Yii::t('main','Posts')=>array('index'),
	Yii::t('main','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Post'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('post-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('main','Manage Posts');?></h1>

<p>
<?php echo Yii::t('main','You may optionally enter a comparison operator'); ?>
 (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b><?php echo Yii::t('main',' or '); ?><b>=</b>) 
<?php echo Yii::t('main','at the beginning of each of your search values to specify how the comparison should be done.'); ?>
</p>

<?php echo CHtml::link(Yii::t('main','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'trans_title',
//		'main_image',
//		'content',
		'description',
		'meta_keywords',
		'meta_description',
		/*
		'create_user_id',
		'update_user_id',
		'create_time',
		'update_time',
		'public_time',
		'active',
		'media_type',
		'category_id',
		'subcategory_id',
		'front_slider',
		'media_embed',
		'count_view',
		'color_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
