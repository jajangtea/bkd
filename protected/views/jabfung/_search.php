<?php
/* @var $this JabfungController */
/* @var $model Jabfung */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idJabfung'); ?>
		<?php echo $form->textField($model,'idJabfung', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaJabfung'); ?>
		<?php echo $form->textField($model,'namaJabfung',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->