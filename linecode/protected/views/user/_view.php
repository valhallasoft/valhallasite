<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_user), array('view', 'id'=>$data->id_user)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_user')); ?>:</b>
	<?php echo CHtml::encode($data->nm_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_user')); ?>:</b>
	<?php echo CHtml::encode($data->us_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_user')); ?>:</b>
	<?php echo CHtml::encode($data->ps_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alt_user')); ?>:</b>
	<?php echo CHtml::encode($data->alt_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ktk_user')); ?>:</b>
	<?php echo CHtml::encode($data->ktk_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hak_id_hak')); ?>:</b>
	<?php echo CHtml::encode($data->hak_id_hak); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jk_id_jk')); ?>:</b>
	<?php echo CHtml::encode($data->jk_id_jk); ?>
	<br />

	*/ ?>

</div>