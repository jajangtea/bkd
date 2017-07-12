<?php
/* @var $this GolonganController */
/* @var $model Golongan */

$this->breadcrumbs=array(
	'Golongans'=>array('index'),
	$model->idGol,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Golongan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Golongan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Golongan', 'url'=>array('update', 'id'=>$model->idGol)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Golongan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGol),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Golongan', 'url'=>array('admin')),
);
?>

<h3>Detil Golongan #<?php echo $model->idGol; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idGol',
		'namaGolongan',
	),
)); ?>

</div>
</div>
