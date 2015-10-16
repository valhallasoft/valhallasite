<?php
/* @var $this HakController */
/* @var $model Hak */

$this->breadcrumbs=array(
	'Haks'=>array('index'),
	$model->id_hak,
);

$this->menu=array(
	array('label'=>'List Hak', 'url'=>array('index')),
	array('label'=>'Create Hak', 'url'=>array('create')),
	array('label'=>'Update Hak', 'url'=>array('update', 'id'=>$model->id_hak)),
	array('label'=>'Delete Hak', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hak),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hak', 'url'=>array('admin')),
);
?>

<h1>View Hak #<?php echo $model->id_hak; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hak',
		'nm_hak',
	),
)); ?>
