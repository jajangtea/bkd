<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'idBidang'); ?>
        <?php echo $form->dropDownList($model, 'idBidang', CHtml::listData(BidangKinerja::model()->findAll(), 'idBidang', 'namaBidang'), array('prompt' => 'Pilih Bidang', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
        <?php echo $form->error($model, 'idBidang'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tahun'); ?>
        <?php echo $form->dropDownList($model, 'tahun', CHtml::listData(Ta::model()->findAll(array('order'=>'ta')), 'idTa', 'ta'), array('prompt' => 'Pilih Tahun', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
        <?php echo $form->error($model, 'tahun'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->