<?php
/* @var $this AsesorController */
/* @var $data Asesor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAsesor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAsesor), array('view', 'id'=>$data->idAsesor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPT')); ?>:</b>
	<?php echo CHtml::encode($data->idPT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ilmu')); ?>:</b>
	<?php echo CHtml::encode($data->ilmu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />


</div>