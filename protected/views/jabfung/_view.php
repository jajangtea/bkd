<?php
/* @var $this JabfungController */
/* @var $data Jabfung */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idJabfung')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idJabfung), array('view', 'id'=>$data->idJabfung)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaJabfung')); ?>:</b>
	<?php echo CHtml::encode($data->namaJabfung); ?>
	<br />


</div>