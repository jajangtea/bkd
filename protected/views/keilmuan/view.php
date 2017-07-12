<?php
/* @var $this KeilmuanController */
/* @var $model Keilmuan */

$this->breadcrumbs=array(
	'Keilmuans'=>array('index'),
	$model->idIlmu,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Keilmuan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Keilmuan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Keilmuan', 'url'=>array('update', 'id'=>$model->idIlmu)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Keilmuan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIlmu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Keilmuan', 'url'=>array('admin')),
);
?>

<h3>Detil Keilmuan #<?php echo $model->idIlmu; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idIlmu',
		'namaIlmu',
	),
)); ?>

</div>
</div>
