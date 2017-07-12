<?php
/* @var $this JenisDosenController */
/* @var $data JenisDosen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idJenisDosen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idJenisDosen), array('view', 'id'=>$data->idJenisDosen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeJenisDosen')); ?>:</b>
	<?php echo CHtml::encode($data->kodeJenisDosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaJenisDosen')); ?>:</b>
	<?php echo CHtml::encode($data->namaJenisDosen); ?>
	<br />


</div>