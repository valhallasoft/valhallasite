<?php
/* @var $this ViewController */
/* @var $model View */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_view'); ?>
		<?php echo $form->textField($model,'id_view'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_view'); ?>
		<?php echo $form->textField($model,'nm_view',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->