<?php
$this->breadcrumbs=array(
	Yii::t('main','Image Posts')=>array('index'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create ImagePost'),'url'=>array('create')),
	array('label'=>Yii::t('main','Manage ImagePost'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('main','Image Posts');?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<script type="text/javascript">
	$('.image-thumb').click(function(){
		var img = $(this).find('img').attr('alt');
		console.log(img);

		var url = '/image/uploaded/large/'+img;
		//
		//console.log(window.parent.location);
		console.log(window.opener.CKEDITOR.tools);
		window.opener.CKEDITOR.tools.callFunction(<?php echo $funcNum;?>, url, 'yes');
		//window.parent.CKEDITOR.tools.callFunction(<?php echo $funcNum;?>, url, 'yes');
		
	});
</script>