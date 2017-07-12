<?php
/* @var $this DosenController */
/* @var $model Dosen */
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
	'id'=>'dosen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">
		<?php //echo $form->labelEx($model,'noSertifikat'); ?>
		<?php //echo $form->textField($model,'noSertifikat', array('class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php //echo $form->error($model,'noSertifikat'); ?>
	</div>-->
	
	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip', array('class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nidn'); ?>
		<?php echo $form->textField($model,'nidn', array('class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'nidn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namaDosen'); ?>
		<?php echo $form->textField($model,'namaDosen',array('size'=>60,'maxlength'=>250, 'class'=>'input-block-level','style'=>'width:100%;')); ?>
		<?php echo $form->error($model,'namaDosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'hp'); ?>
		<?php echo $form->textField($model,'hp',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'hp'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'idProdi'); ?>
		<?php echo $form->dropDownList($model,'idProdi', CHtml::listData(Prodi::model()->findAll(), 'idPordi', 'namaProdi'),array('prompt'=>'Pilih Prodi','class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'idProdi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPT'); ?>
		<?php echo $form->dropDownList($model,'idPT', CHtml::listData(Pt::model()->findAll(), 'idPT', 'namaPT'),array('prompt'=>'Pilih Perguruan Tinggi','class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'idPT'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'s1'); ?>
		<?php echo $form->dropDownList($model,'s1', CHtml::listData(Pt::model()->findAll(), 'idPT', 'namaPT'),array('prompt'=>'Pilih Perguruan Tinggi','class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'s1'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'s2'); ?>
		<?php echo $form->dropDownList($model,'s2', CHtml::listData(Pt::model()->findAll(), 'idPT', 'namaPT'),array('prompt'=>'Pilih Perguruan Tinggi','class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'s2'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'s3'); ?>
		<?php echo $form->dropDownList($model,'s3', CHtml::listData(Pt::model()->findAll(), 'idPT', 'namaPT'),array('prompt'=>'Pilih Perguruan Tinggi','class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'s3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idJabfung'); ?>
		<?php echo $form->dropDownList($model,'idJabfung', CHtml::listData(Jabfung::model()->findAll(), 'idJabfung', 'namaJabfung'),array('prompt'=>'Pilih Jabatan Fungsional','class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'idJabfung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idGol'); ?>
		<?php echo $form->dropDownList($model,'idGol', CHtml::listData(Golongan::model()->findAll(), 'idGol', 'namaGolongan'),array('prompt'=>'Pilih Golongan','class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'idGol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempatLahir'); ?>
		<?php echo $form->textField($model,'tempatLahir',array('size'=>60,'maxlength'=>200, 'class'=>'input-block-level','style'=>'width:50%;')); ?>
		<?php echo $form->error($model,'tempatLahir'); ?>
	
		<?php echo $form->labelEx($model,'tglLahir'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'name'=>'tglLahir',
					'model'=>$model,
					'attribute'=>'tglLahir',
					'value' => $model->tglLahir,
					'options'=>array
					(
						'showAnim'=>'fold',
						'dateFormat'=>'yy-mm-dd',
						'changeMonth' => 'true',
						'changeYear' => 'true',
						'constrainInput' => 'false',
					),
					'htmlOptions'=>array
					(
						'style'=>'height:20px;'
					),
		));?>
    </div>
	
	

	<div class="row">
		<?php echo $form->labelEx($model,'idJenisDosen'); ?>
		<?php echo $form->dropDownList($model,'idJenisDosen', CHtml::listData(JenisDosen::model()->findAll(), 'idJenisDosen', 'namaJenisDosen'),array('prompt'=>'Pilih Jenis Dosen','class'=>'input-block-level','style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'idJenisDosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idIlmu'); ?>
		<?php echo $form->dropDownList($model,'idIlmu', CHtml::listData(Keilmuan::model()->findAll(), 'idIlmu', 'namaIlmu'),array('prompt'=>'Pilih Keilmuan','class'=>'input-block-level','style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'idIlmu'); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->labelEx($model,'idTA'); ?>
		<?php //echo $form->dropDownList($model,'idTA', CHtml::listData(Ta::model()->findAll(), 'idTa', 'ta'),array('prompt'=>'Pilih Tahun Ajaran','class'=>'input-block-level','style'=>'width:200px;')); ?>
		<?php //echo $form->error($model,'idTA'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'idasesor1'); ?>
		<?php //echo $form->dropDownList($model,'idasesor1', CHtml::listData(Asesor::model()->findAll(), 'idAsesor', 'nama'),array('prompt'=>'Pilih Asesor 1','class'=>'input-block-level','style'=>'width:200px;')); ?>
		<?php //echo $form->error($model,'idasesor1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'idasesor2'); ?>
		<?php //echo $form->dropDownList($model,'idasesor2', CHtml::listData(Asesor::model()->findAll(), 'idAsesor', 'nama'),array('prompt'=>'Pilih Asesor 1','class'=>'input-block-level','style'=>'width:200px;')); ?>
		<?php //echo $form->error($model,'idasesor2'); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->labelEx($model,'idSemester'); ?>
		<?php //echo $form->dropDownList($model,'idSemester', CHtml::listData(Semester::model()->findAll(), 'idSemester', 'namaSemester'),array('prompt'=>'Pilih Semester','class'=>'input-block-level','style'=>'width:200px;')); ?>
		<?php //echo $form->error($model,'idSemester'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>