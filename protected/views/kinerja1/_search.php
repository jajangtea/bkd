<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idKinerja'); ?>
		<?php echo $form->textField($model,'idKinerja', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'idBidang'); ?>
		<?php echo $form->textField($model,'idBidang', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'jenisKegiatan'); ?>
		<?php echo $form->textField($model,'jenisKegiatan',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'buktiPenugasan'); ?>
		<?php echo $form->textField($model,'buktiPenugasan',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'sksPenugasan'); ?>
		<?php echo $form->textField($model,'sksPenugasan',array('size'=>5,'maxlength'=>5, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'masaPenugasan'); ?>
		<?php echo $form->textField($model,'masaPenugasan',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'buktiDokumen'); ?>
		<?php echo $form->textField($model,'buktiDokumen',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'sksDokumen'); ?>
		<?php echo $form->textField($model,'sksDokumen',array('size'=>5,'maxlength'=>5, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'idRekomendasi'); ?>
		<?php echo $form->textField($model,'idRekomendasi', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'idDosen'); ?>
		<?php echo $form->textField($model,'idDosen', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-search"></i> Save');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->