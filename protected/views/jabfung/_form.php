<?php
/* @var $this JabfungController */
/* @var $model Jabfung */
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
	'id'=>'jabfung-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'namaJabfung'); ?>
		<?php echo $form->textField($model,'namaJabfung',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'namaJabfung'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>