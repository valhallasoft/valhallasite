<?php
/* @var $this JkController */
/* @var $model Jk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_jk'); ?>
		<?php echo $form->textField($model,'id_jk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_jk'); ?>
		<?php echo $form->textField($model,'nm_jk',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->