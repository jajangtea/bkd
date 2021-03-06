<?php
/* @var $this JenisDosenController */
/* @var $model JenisDosen */
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
	'id'=>'jenis-dosen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kodeJenisDosen'); ?>
		<?php echo $form->textField($model,'kodeJenisDosen',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kodeJenisDosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namaJenisDosen'); ?>
		<?php echo $form->textField($model,'namaJenisDosen',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'namaJenisDosen'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>