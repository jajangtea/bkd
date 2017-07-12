<?php
/* @var $this PtController */
/* @var $model Pt */

$this->breadcrumbs=array(
	'Pts'=>array('index'),
	$model->idPT,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Pt', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Pt', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Pt', 'url'=>array('update', 'id'=>$model->idPT)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Pt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Pt', 'url'=>array('admin')),
);
?>

<h3>View Pt #<?php echo $model->idPT; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPT',
		'namaPT',
		'alamatPT',
	),
)); ?>

</div>
</div>
