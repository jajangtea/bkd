<?php
/* @var $this SemesterController */
/* @var $modelKinerja Semester */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => 'index.php?r=site/tampil',
        'method' => 'post',
    ));
    ?>

    <div class="row">
        <?php echo $form->label($modelKinerja, 'idTa'); ?>
        <?php echo $form->dropDownList($modelKinerja, 'tawal', CHtml::listData(Ta::model()->findAll(array('order'=>'ta')), 'idTa', 'ta'), array('prompt' => 'Pilih Tahun Ajaran', 'class' => 'input-block-level', 'style' => 'width:200px;')); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->