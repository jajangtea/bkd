<?php
/* @var $this PtController */
/* @var $model Pt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPT'); ?>
		<?php echo $form->textField($model,'idPT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaPT'); ?>
		<?php echo $form->textField($model,'namaPT',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamatPT'); ?>
		<?php echo $form->textField($model,'alamatPT',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->