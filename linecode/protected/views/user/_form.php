<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_user'); ?>
		<?php echo $form->textField($model,'nm_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nm_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_user'); ?>
		<?php echo $form->textField($model,'us_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'us_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ps_user'); ?>
		<?php echo $form->textField($model,'ps_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ps_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alt_user'); ?>
		<?php echo $form->textField($model,'alt_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alt_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ktk_user'); ?>
		<?php echo $form->textField($model,'ktk_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ktk_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hak_id_hak'); ?>
		<?php echo $form->textField($model,'hak_id_hak'); ?>
		<?php echo $form->error($model,'hak_id_hak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jk_id_jk'); ?>
		<?php echo $form->textField($model,'jk_id_jk'); ?>
		<?php echo $form->error($model,'jk_id_jk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->