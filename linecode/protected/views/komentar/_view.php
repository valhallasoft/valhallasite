<?php
/* @var $this KomentarController */
/* @var $data Komentar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_komentar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_komentar), array('view', 'id'=>$data->id_komentar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi_komentar')); ?>:</b>
	<?php echo CHtml::encode($data->isi_komentar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_komentar')); ?>:</b>
	<?php echo CHtml::encode($data->nm_komentar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artikel_id_artikel')); ?>:</b>
	<?php echo CHtml::encode($data->artikel_id_artikel); ?>
	<br />


</div>