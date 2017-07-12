<?php
/* @var $this KinerjaController */
/* @var $data Kinerja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idKinerja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idKinerja), array('view', 'id'=>$data->idKinerja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBidang')); ?>:</b>
	<?php echo CHtml::encode($data->idBidang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenisKegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->jenisKegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buktiPenugasan')); ?>:</b>
	<?php echo CHtml::encode($data->buktiPenugasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sksPenugasan')); ?>:</b>
	<?php echo CHtml::encode($data->sksPenugasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masaPenugasan')); ?>:</b>
	<?php echo CHtml::encode($data->masaPenugasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buktiDokumen')); ?>:</b>
	<?php echo CHtml::encode($data->buktiDokumen); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sksDokumen')); ?>:</b>
	<?php echo CHtml::encode($data->sksDokumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRekomendasi')); ?>:</b>
	<?php echo CHtml::encode($data->idRekomendasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDosen')); ?>:</b>
	<?php echo CHtml::encode($data->idDosen); ?>
	<br />

	*/ ?>

</div>