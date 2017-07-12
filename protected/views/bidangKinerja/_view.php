<?php
/* @var $this BidangKinerjaController */
/* @var $data BidangKinerja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBidang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idBidang), array('view', 'id'=>$data->idBidang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaBidang')); ?>:</b>
	<?php echo CHtml::encode($data->namaBidang); ?>
	<br />


</div>