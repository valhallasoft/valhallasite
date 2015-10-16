<?php
/* @var $this JkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jks',
);

$this->menu=array(
	array('label'=>'Create Jk', 'url'=>array('create')),
	array('label'=>'Manage Jk', 'url'=>array('admin')),
);
?>

<h1>Jks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
