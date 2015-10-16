<?php
/* @var $this KatagoryController */
/* @var $model Katagory */

$this->breadcrumbs=array(
	'Katagories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Katagory', 'url'=>array('index')),
	array('label'=>'Manage Katagory', 'url'=>array('admin')),
);
?>

<h1>Create Katagory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>