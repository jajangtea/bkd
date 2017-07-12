<?php
/* @var $this JenisDosenController */
/* @var $model JenisDosen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idJenisDosen'); ?>
		<?php echo $form->textField($model,'idJenisDosen', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kodeJenisDosen'); ?>
		<?php echo $form->textField($model,'kodeJenisDosen',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaJenisDosen'); ?>
		<?php echo $form->textField($model,'namaJenisDosen',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->