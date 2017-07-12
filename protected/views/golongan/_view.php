<?php
/* @var $this GolonganController */
/* @var $data Golongan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idGol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idGol), array('view', 'id'=>$data->idGol)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaGolongan')); ?>:</b>
	<?php echo CHtml::encode($data->namaGolongan); ?>
	<br />


</div>