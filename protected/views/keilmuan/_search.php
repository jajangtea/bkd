<?php
/* @var $this KeilmuanController */
/* @var $model Keilmuan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idIlmu'); ?>
		<?php echo $form->textField($model,'idIlmu', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaIlmu'); ?>
		<?php echo $form->textField($model,'namaIlmu',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->