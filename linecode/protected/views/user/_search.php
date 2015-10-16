<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_user'); ?>
		<?php echo $form->textField($model,'nm_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'us_user'); ?>
		<?php echo $form->textField($model,'us_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ps_user'); ?>
		<?php echo $form->textField($model,'ps_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alt_user'); ?>
		<?php echo $form->textField($model,'alt_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ktk_user'); ?>
		<?php echo $form->textField($model,'ktk_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hak_id_hak'); ?>
		<?php echo $form->textField($model,'hak_id_hak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jk_id_jk'); ?>
		<?php echo $form->textField($model,'jk_id_jk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->