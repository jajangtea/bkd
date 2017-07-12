<?php
/* @var $this BidangKinerjaController */
/* @var $model BidangKinerja */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idBidang'); ?>
		<?php echo $form->textField($model,'idBidang', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaBidang'); ?>
		<?php echo $form->textField($model,'namaBidang',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->