<?php
/* @var $this KatagoryController */
/* @var $model Katagory */

$this->breadcrumbs=array(
	'Katagories'=>array('index'),
	$model->id_katagory,
);

$this->menu=array(
	array('label'=>'List Katagory', 'url'=>array('index')),
	array('label'=>'Create Katagory', 'url'=>array('create')),
	array('label'=>'Update Katagory', 'url'=>array('update', 'id'=>$model->id_katagory)),
	array('label'=>'Delete Katagory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_katagory),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Katagory', 'url'=>array('admin')),
);
?>

<h1>View Katagory #<?php echo $model->id_katagory; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_katagory',
		'nm_katagory',
		'Menu_id_menu',
		'view_id_view',
	),
)); ?>
