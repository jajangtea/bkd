<?php
/* @var $this AsesorController */
/* @var $model Asesor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAsesor'); ?>
		<?php echo $form->textField($model,'idAsesor', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPT'); ?>
		<?php echo $form->textField($model,'idPT', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ilmu'); ?>
		<?php echo $form->textField($model,'ilmu', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>250, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->