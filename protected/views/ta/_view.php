<?php
/* @var $this TaController */
/* @var $data Ta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTa), array('view', 'id'=>$data->idTa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ta')); ?>:</b>
	<?php echo CHtml::encode($data->ta); ?>
	<br />


</div>