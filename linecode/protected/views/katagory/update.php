<?php
/* @var $this KatagoryController */
/* @var $model Katagory */

$this->breadcrumbs=array(
	'Katagories'=>array('index'),
	$model->id_katagory=>array('view','id'=>$model->id_katagory),
	'Update',
);

$this->menu=array(
	array('label'=>'List Katagory', 'url'=>array('index')),
	array('label'=>'Create Katagory', 'url'=>array('create')),
	array('label'=>'View Katagory', 'url'=>array('view', 'id'=>$model->id_katagory)),
	array('label'=>'Manage Katagory', 'url'=>array('admin')),
);
?>

<h1>Update Katagory <?php echo $model->id_katagory; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>