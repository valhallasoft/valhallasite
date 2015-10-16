<?php
/* @var $this KomentarController */
/* @var $model Komentar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_komentar'); ?>
		<?php echo $form->textField($model,'id_komentar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isi_komentar'); ?>
		<?php echo $form->textField($model,'isi_komentar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_komentar'); ?>
		<?php echo $form->textField($model,'nm_komentar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'artikel_id_artikel'); ?>
		<?php echo $form->textField($model,'artikel_id_artikel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->