<?php
/* @var $this DosenController */
/* @var $data Dosen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDosen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDosen), array('view', 'id'=>$data->idDosen)); ?>
	<br />

<!--	<b><?php //echo CHtml::encode($data->getAttributeLabel('noSertifikat')); ?>:</b>
	<?php //echo CHtml::encode($data->noSertifikat); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nidn')); ?>:</b>
	<?php echo CHtml::encode($data->nidn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaDosen')); ?>:</b>
	<?php echo CHtml::encode($data->namaDosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPT')); ?>:</b>
	<?php echo CHtml::encode($data->idPT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProdi')); ?>:</b>
	<?php echo CHtml::encode($data->idProdi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idJabfung')); ?>:</b>
	<?php echo CHtml::encode($data->idJabfung); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idGol')); ?>:</b>
	<?php echo CHtml::encode($data->idGol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglLahir')); ?>:</b>
	<?php echo CHtml::encode($data->tglLahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempatLahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempatLahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idJenisDosen')); ?>:</b>
	<?php echo CHtml::encode($data->idJenisDosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIlmu')); ?>:</b>
	<?php echo CHtml::encode($data->idIlmu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTA')); ?>:</b>
	<?php echo CHtml::encode($data->idTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idasesor1')); ?>:</b>
	<?php echo CHtml::encode($data->idasesor1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idasesor2')); ?>:</b>
	<?php echo CHtml::encode($data->idasesor2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSemester')); ?>:</b>
	<?php echo CHtml::encode($data->idSemester); ?>
	<br />

	*/ ?>

</div>