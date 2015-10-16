<?php
/* @var $this ViewController */
/* @var $model View */

$this->breadcrumbs=array(
	'Views'=>array('index'),
	$model->id_view,
);

$this->menu=array(
	array('label'=>'List View', 'url'=>array('index')),
	array('label'=>'Create View', 'url'=>array('create')),
	array('label'=>'Update View', 'url'=>array('update', 'id'=>$model->id_view)),
	array('label'=>'Delete View', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_view),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage View', 'url'=>array('admin')),
);
?>

<h1>View View #<?php echo $model->id_view; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_view',
		'nm_view',
	),
)); ?>
