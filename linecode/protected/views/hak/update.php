<?php
/* @var $this HakController */
/* @var $model Hak */

$this->breadcrumbs=array(
	'Haks'=>array('index'),
	$model->id_hak=>array('view','id'=>$model->id_hak),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hak', 'url'=>array('index')),
	array('label'=>'Create Hak', 'url'=>array('create')),
	array('label'=>'View Hak', 'url'=>array('view', 'id'=>$model->id_hak)),
	array('label'=>'Manage Hak', 'url'=>array('admin')),
);
?>

<h1>Update Hak <?php echo $model->id_hak; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>