<?php
/* @var $this AsesorController */
/* @var $model Asesor */

$this->breadcrumbs=array(
	'Asesors'=>array('index'),
	$model->idAsesor,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Asesor', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Asesor', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Asesor', 'url'=>array('update', 'id'=>$model->idAsesor)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Asesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAsesor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Asesor', 'url'=>array('admin')),
);
?>

<h3>Detil Asesor #<?php echo $model->idAsesor; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAsesor',
		'idPT',
		'ilmu',
		'nama',
	),
)); ?>

</div>
</div>
