<?php
/* @var $this HakController */
/* @var $model Hak */

$this->breadcrumbs=array(
	'Haks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hak', 'url'=>array('index')),
	array('label'=>'Manage Hak', 'url'=>array('admin')),
);
?>

<h1>Create Hak</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>