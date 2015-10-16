<?php
/* @var $this HakController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Haks',
);

$this->menu=array(
	array('label'=>'Create Hak', 'url'=>array('create')),
	array('label'=>'Manage Hak', 'url'=>array('admin')),
);
?>

<h1>Haks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
