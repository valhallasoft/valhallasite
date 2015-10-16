<?php
/* @var $this KatagoryController */
/* @var $model Katagory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'katagory-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_katagory'); ?>
		<?php echo $form->textField($model,'nm_katagory',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nm_katagory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Menu_id_menu'); ?>
		<?php echo $form->textField($model,'Menu_id_menu'); ?>
		<?php echo $form->error($model,'Menu_id_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view_id_view'); ?>
		<?php echo $form->textField($model,'view_id_view'); ?>
		<?php echo $form->error($model,'view_id_view'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->