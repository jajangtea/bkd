<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kinerja-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="text-info">Kolom dengan tanda <span class="required">*</span> tidak boleh kosong.</p>
	<div class="text-danger">
	<?php echo $form->errorSummary($model); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'idBidang'); ?>
		<?php echo $form->textField($model,'idBidang', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'idBidang',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jenisKegiatan'); ?>
		<?php echo $form->textField($model,'jenisKegiatan',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'jenisKegiatan',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'buktiPenugasan'); ?>
		<?php echo $form->textField($model,'buktiPenugasan',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'buktiPenugasan',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'sksPenugasan'); ?>
		<?php echo $form->textField($model,'sksPenugasan',array('size'=>5,'maxlength'=>5, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'sksPenugasan',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'masaPenugasan'); ?>
		<?php echo $form->textField($model,'masaPenugasan',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'masaPenugasan',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'buktiDokumen'); ?>
		<?php echo $form->textField($model,'buktiDokumen',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'buktiDokumen',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'sksDokumen'); ?>
		<?php echo $form->textField($model,'sksDokumen',array('size'=>5,'maxlength'=>5, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'sksDokumen',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'idRekomendasi'); ?>
		<?php echo $form->textField($model,'idRekomendasi', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'idRekomendasi',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'tahun',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'idDosen'); ?>
		<?php echo $form->textField($model,'idDosen', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'idDosen',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
                 <?php
if($model->isNewRecord)
{
echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-success'),'<i class="fa fa-save"></i> Create');
}
else
{
echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-save"></i> Save');
}
?>
	</div>

<?php $this->endWidget(); ?>
