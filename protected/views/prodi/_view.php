<?php
/* @var $this ProdiController */
/* @var $data Prodi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPordi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPordi), array('view', 'id'=>$data->idPordi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaProdi')); ?>:</b>
	<?php echo CHtml::encode($data->namaProdi); ?>
	<br />


</div>