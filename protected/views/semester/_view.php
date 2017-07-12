<?php
/* @var $this SemesterController */
/* @var $data Semester */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSemester')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSemester), array('view', 'id'=>$data->idSemester)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaSemester')); ?>:</b>
	<?php echo CHtml::encode($data->namaSemester); ?>
	<br />


</div>