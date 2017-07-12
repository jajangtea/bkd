<?php
/* @var $this TaController */
/* @var $model Ta */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idTa'); ?>
		<?php echo $form->textField($model,'idTa', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ta'); ?>
		<?php echo $form->textField($model,'ta',array('size'=>60,'maxlength'=>100, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-search"></i> Save');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->