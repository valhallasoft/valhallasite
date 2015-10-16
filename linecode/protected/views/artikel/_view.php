<?php
/* @var $this ArtikelController */
/* @var $data Artikel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_artikel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_artikel), array('view', 'id'=>$data->id_artikel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jdl_artikel')); ?>:</b>
	<?php echo CHtml::encode($data->jdl_artikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi_artikel')); ?>:</b>
	<?php echo CHtml::encode($data->isi_artikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_artikel')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_artikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('like_artikel')); ?>:</b>
	<?php echo CHtml::encode($data->like_artikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_artikel')); ?>:</b>
	<?php echo CHtml::encode($data->con_artikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('png_artikel')); ?>:</b>
	<?php echo CHtml::encode($data->png_artikel); ?>
	<br />


</div>