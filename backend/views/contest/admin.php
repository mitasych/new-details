<?php
$this->breadcrumbs=array(
	Yii::t('main','Contests')=>array('index'),
	Yii::t('main','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Contest'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('contest-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('main','Manage Contests');?></h1>

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
	'id'=>'contest-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'machine_name',
		'description',
		'short_description',
		'contest_media_type_id',
		/*
		'create_user_id',
		'update_user_id',
		'create_time',
		'update_time',
		'start_time',
		'end_time',
		'winner_item_id',
		'winner_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
