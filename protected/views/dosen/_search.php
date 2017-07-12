<?php
/* @var $this DosenController */
/* @var $model Dosen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDosen'); ?>
		<?php echo $form->textField($model,'idDosen', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noSertifikat'); ?>
		<?php echo $form->textField($model,'noSertifikat', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nidn'); ?>
		<?php echo $form->textField($model,'nidn', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaDosen'); ?>
		<?php echo $form->textField($model,'namaDosen',array('size'=>60,'maxlength'=>250, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPT'); ?>
		<?php echo $form->textField($model,'idPT', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProdi'); ?>
		<?php echo $form->textField($model,'idProdi', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idJabfung'); ?>
		<?php echo $form->textField($model,'idJabfung', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idGol'); ?>
		<?php echo $form->textField($model,'idGol', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglLahir'); ?>
		<?php echo $form->textField($model,'tglLahir', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempatLahir'); ?>
		<?php echo $form->textField($model,'tempatLahir',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idJenisDosen'); ?>
		<?php echo $form->textField($model,'idJenisDosen', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idIlmu'); ?>
		<?php echo $form->textField($model,'idIlmu', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTA'); ?>
		<?php echo $form->textField($model,'idTA', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idasesor1'); ?>
		<?php echo $form->textField($model,'idasesor1', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idasesor2'); ?>
		<?php echo $form->textField($model,'idasesor2', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idSemester'); ?>
		<?php echo $form->textField($model,'idSemester', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->