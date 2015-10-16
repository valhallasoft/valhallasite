<?php
/* @var $this JkController */
/* @var $data Jk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jk), array('view', 'id'=>$data->id_jk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_jk')); ?>:</b>
	<?php echo CHtml::encode($data->nm_jk); ?>
	<br />


</div>