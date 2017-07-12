<?php
/* @var $this AsesorController */
/* @var $model Asesor */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'idPT'); ?>
		<?php echo $form->textField($model,'idPT', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'idPT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ilmu'); ?>
		<?php echo $form->textField($model,'ilmu', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'ilmu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>250, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>