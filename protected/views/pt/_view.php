<?php
/* @var $this PtController */
/* @var $data Pt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPT), array('view', 'id'=>$data->idPT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaPT')); ?>:</b>
	<?php echo CHtml::encode($data->namaPT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamatPT')); ?>:</b>
	<?php echo CHtml::encode($data->alamatPT); ?>
	<br />


</div>