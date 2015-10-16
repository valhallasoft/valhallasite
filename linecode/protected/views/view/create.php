<?php
/* @var $this ViewController */
/* @var $model View */

$this->breadcrumbs=array(
	'Views'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List View', 'url'=>array('index')),
	array('label'=>'Manage View', 'url'=>array('admin')),
);
?>

<h1>Create View</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>