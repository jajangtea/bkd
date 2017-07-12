<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->idPordi,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Prodi', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Prodi', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Prodi', 'url'=>array('update', 'id'=>$model->idPordi)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Prodi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPordi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Prodi', 'url'=>array('admin')),
);
?>

<h3>Detil Prodi #<?php echo $model->idPordi; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPordi',
		'namaProdi',
	),
)); ?>

</div>
</div>
