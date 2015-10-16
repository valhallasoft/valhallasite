<?php
/* @var $this JkController */
/* @var $model Jk */

$this->breadcrumbs=array(
	'Jks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jk', 'url'=>array('index')),
	array('label'=>'Manage Jk', 'url'=>array('admin')),
);
?>

<h1>Create Jk</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>