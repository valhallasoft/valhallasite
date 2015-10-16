<?php
/* @var $this JkController */
/* @var $model Jk */

$this->breadcrumbs=array(
	'Jks'=>array('index'),
	$model->id_jk=>array('view','id'=>$model->id_jk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jk', 'url'=>array('index')),
	array('label'=>'Create Jk', 'url'=>array('create')),
	array('label'=>'View Jk', 'url'=>array('view', 'id'=>$model->id_jk)),
	array('label'=>'Manage Jk', 'url'=>array('admin')),
);
?>

<h1>Update Jk <?php echo $model->id_jk; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>