<?php
/* @var $this KatagoryController */
/* @var $data Katagory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_katagory')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_katagory), array('view', 'id'=>$data->id_katagory)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_katagory')); ?>:</b>
	<?php echo CHtml::encode($data->nm_katagory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Menu_id_menu')); ?>:</b>
	<?php echo CHtml::encode($data->Menu_id_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view_id_view')); ?>:</b>
	<?php echo CHtml::encode($data->view_id_view); ?>
	<br />


</div>