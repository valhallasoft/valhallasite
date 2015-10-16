<?php
/* @var $this HakController */
/* @var $data Hak */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hak')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hak), array('view', 'id'=>$data->id_hak)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_hak')); ?>:</b>
	<?php echo CHtml::encode($data->nm_hak); ?>
	<br />


</div>