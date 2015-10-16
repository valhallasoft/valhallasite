<?php
/* @var $this KatagoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Katagories',
);

$this->menu=array(
	array('label'=>'Create Katagory', 'url'=>array('create')),
	array('label'=>'Manage Katagory', 'url'=>array('admin')),
);
?>

<h1>Katagories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
