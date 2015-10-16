<?php
/* @var $this ViewController */
/* @var $data View */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_view')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_view), array('view', 'id'=>$data->id_view)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_view')); ?>:</b>
	<?php echo CHtml::encode($data->nm_view); ?>
	<br />


</div>