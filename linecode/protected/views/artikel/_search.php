<?php
/* @var $this ArtikelController */
/* @var $model Artikel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_artikel'); ?>
		<?php echo $form->textField($model,'id_artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jdl_artikel'); ?>
		<?php echo $form->textField($model,'jdl_artikel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isi_artikel'); ?>
		<?php echo $form->textArea($model,'isi_artikel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_artikel'); ?>
		<?php echo $form->textField($model,'tgl_artikel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'like_artikel'); ?>
		<?php echo $form->textField($model,'like_artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'con_artikel'); ?>
		<?php echo $form->textField($model,'con_artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'png_artikel'); ?>
		<?php echo $form->textField($model,'png_artikel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->