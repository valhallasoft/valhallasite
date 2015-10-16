<?php
/* @var $this ArtikelController */
/* @var $model Artikel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artikel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jdl_artikel'); ?>
		<?php echo $form->textField($model,'jdl_artikel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'jdl_artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isi_artikel'); ?>
		<?php echo $form->textArea($model,'isi_artikel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'isi_artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_artikel'); ?>
		<?php echo $form->textField($model,'tgl_artikel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tgl_artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'like_artikel'); ?>
		<?php echo $form->textField($model,'like_artikel'); ?>
		<?php echo $form->error($model,'like_artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'con_artikel'); ?>
		<?php echo $form->textField($model,'con_artikel'); ?>
		<?php echo $form->error($model,'con_artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'png_artikel'); ?>
		<?php echo $form->textField($model,'png_artikel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'png_artikel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->