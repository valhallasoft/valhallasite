<?php
/* @var $this KomentarController */
/* @var $model Komentar */

$this->breadcrumbs=array(
	'Komentars'=>array('index'),
	$model->id_komentar,
);

$this->menu=array(
	array('label'=>'List Komentar', 'url'=>array('index')),
	array('label'=>'Create Komentar', 'url'=>array('create')),
	array('label'=>'Update Komentar', 'url'=>array('update', 'id'=>$model->id_komentar)),
	array('label'=>'Delete Komentar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_komentar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Komentar', 'url'=>array('admin')),
);
?>

<h1>View Komentar #<?php echo $model->id_komentar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_komentar',
		'isi_komentar',
		'nm_komentar',
		'artikel_id_artikel',
	),
)); ?>
