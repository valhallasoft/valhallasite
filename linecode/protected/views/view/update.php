<?php
/* @var $this ViewController */
/* @var $model View */

$this->breadcrumbs=array(
	'Views'=>array('index'),
	$model->id_view=>array('view','id'=>$model->id_view),
	'Update',
);

$this->menu=array(
	array('label'=>'List View', 'url'=>array('index')),
	array('label'=>'Create View', 'url'=>array('create')),
	array('label'=>'View View', 'url'=>array('view', 'id'=>$model->id_view)),
	array('label'=>'Manage View', 'url'=>array('admin')),
);
?>

<h1>Update View <?php echo $model->id_view; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>