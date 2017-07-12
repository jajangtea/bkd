<?php
/* @var $this KeilmuanController */
/* @var $data Keilmuan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIlmu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idIlmu), array('view', 'id'=>$data->idIlmu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaIlmu')); ?>:</b>
	<?php echo CHtml::encode($data->namaIlmu); ?>
	<br />


</div>