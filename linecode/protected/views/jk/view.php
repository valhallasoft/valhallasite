<?php
/* @var $this JkController */
/* @var $model Jk */

$this->breadcrumbs=array(
	'Jks'=>array('index'),
	$model->id_jk,
);

$this->menu=array(
	array('label'=>'List Jk', 'url'=>array('index')),
	array('label'=>'Create Jk', 'url'=>array('create')),
	array('label'=>'Update Jk', 'url'=>array('update', 'id'=>$model->id_jk)),
	array('label'=>'Delete Jk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jk', 'url'=>array('admin')),
);
?>

<h1>View Jk #<?php echo $model->id_jk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jk',
		'nm_jk',
	),
)); ?>
