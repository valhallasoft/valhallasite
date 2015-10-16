<?php
/* @var $this KomentarController */
/* @var $model Komentar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'komentar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'isi_komentar'); ?>
		<?php echo $form->textField($model,'isi_komentar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'isi_komentar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_komentar'); ?>
		<?php echo $form->textField($model,'nm_komentar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nm_komentar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artikel_id_artikel'); ?>
		<?php echo $form->textField($model,'artikel_id_artikel'); ?>
		<?php echo $form->error($model,'artikel_id_artikel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->