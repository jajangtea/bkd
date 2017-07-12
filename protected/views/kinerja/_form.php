<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */
/* @var $form CActiveForm */
?>

<div class="portlet">
    <div class="portlet-decoration">
        <div class="portlet-title">
        </div>
    </div>
    <div class="portlet-content">

        <div class="form">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'kinerja-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
            ));
            ?>

            <p class="note">Fields with <span class="required">*</span> are required.</p>

            <?php /// echo $form->errorSummary($model);  ?>

            <div class="row">
                <?php echo $form->labelEx($model, 'idDosen'); ?>
                <?php echo $form->dropDownList($model, 'idDosen', CHtml::listData(Dosen::model()->findAll(array('order' => 'namaDosen')), 'idDosen', 'namaDosen'), array('prompt' => 'Pilih Dosen', 'class' => 'input-block-level', 'style' => 'width:50%;')); ?>
                <?php echo $form->error($model, 'idDosen'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'idBidang'); ?>
                <?php echo $form->dropDownList($model, 'idBidang', CHtml::listData(BidangKinerja::model()->findAll(), 'idBidang', 'namaBidang'), array('prompt' => 'Pilih Bidang', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
                <?php echo $form->error($model, 'idBidang'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'jenisKegiatan'); ?>
                <?php echo $form->textField($model, 'jenisKegiatan', array('size' => 60, 'maxlength' => 200, 'class' => 'input-block-level', 'style' => 'width:50%;')); ?>
                <?php echo $form->error($model, 'jenisKegiatan'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'buktiPenugasan'); ?>
                <?php echo $form->textField($model, 'buktiPenugasan', array('size' => 60, 'maxlength' => 200, 'class' => 'input-block-level', 'style' => 'width:50%;')); ?>
                <?php echo $form->error($model, 'buktiPenugasan'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'sksPenugasan'); ?>
                <?php echo $form->textField($model, 'sksPenugasan', array('size' => 5, 'maxlength' => 5, 'class' => 'input-block-level', 'style' => 'width:100px;')); ?>
                <?php echo $form->error($model, 'sksPenugasan'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'masaPenugasan'); ?>
                <?php echo $form->textField($model, 'masaPenugasan', array('size' => 60, 'maxlength' => 200, 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
                <?php echo $form->error($model, 'masaPenugasan'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'buktiDokumen'); ?>
                <?php echo $form->textField($model, 'buktiDokumen', array('size' => 60, 'maxlength' => 200, 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
                <?php echo $form->error($model, 'buktiDokumen'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'idRekomendasi'); ?>
                <?php echo $form->dropDownList($model, 'idRekomendasi', CHtml::listData(Rekomendasi::model()->findAll(), 'idRekomedasi', 'rekomendasi'), array('prompt' => 'Pilih Rekomendasi', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
                <?php echo $form->error($model, 'idRekomendasi'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'idasesor1'); ?>
                <?php echo $form->dropDownList($model, 'idasesor1', CHtml::listData(Asesor::model()->findAll(), 'idAsesor', 'nama'), array('prompt' => 'Pilih Asesor', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
                <?php echo $form->error($model, 'idasesor1'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'idasesor2'); ?>
                <?php echo $form->dropDownList($model, 'idasesor2', CHtml::listData(Asesor::model()->findAll(), 'idAsesor', 'nama'), array('prompt' => 'Pilih Asesor', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
                <?php echo $form->error($model, 'idasesor2'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'tahun'); ?>
                <?php echo $form->dropDownList($model, 'tahun', CHtml::listData(Ta::model()->findAll(array('order'=>'ta')), 'idTa', 'ta'), array('prompt' => 'Pilih Tahun', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
                <?php echo $form->error($model, 'tahun'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'idSemester'); ?>
                <?php echo $form->dropDownList($model, 'idSemester', CHtml::listData(Semester::model()->findAll(), 'idSemester', 'namaSemester'), array('prompt' => 'Pilih Semester', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
                <?php echo $form->error($model, 'idSemester'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('zii', 'Create') : Yii::t('zii', 'Save'), array('class' => 'btn btn-sm btn-primary')); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->

    </div>
</div>