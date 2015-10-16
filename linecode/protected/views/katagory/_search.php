<?php
/* @var $this KatagoryController */
/* @var $model Katagory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_katagory'); ?>
		<?php echo $form->textField($model,'id_katagory'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_katagory'); ?>
		<?php echo $form->textField($model,'nm_katagory',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Menu_id_menu'); ?>
		<?php echo $form->textField($model,'Menu_id_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'view_id_view'); ?>
		<?php echo $form->textField($model,'view_id_view'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->