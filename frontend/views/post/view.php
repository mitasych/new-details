<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post','url'=>array('index')),
	array('label'=>'Create Post','url'=>array('create')),
	array('label'=>'Update Post','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Post','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post','url'=>array('admin')),
);
?>

<h1>View Post #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'trans_title',
		'main_image',
		'content',
		'description',
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
	),
)); ?>
