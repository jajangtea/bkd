<?php
/* @var $this TaController */
/* @var $model Ta */

$this->breadcrumbs=array(
	'Tas'=>array('index'),
	$model->idTa,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Ta', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Ta', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Ta', 'url'=>array('update', 'id'=>$model->idTa)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Ta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Ta', 'url'=>array('admin')),
);
?>

<h3>Detil Ta #<?php echo $model->idTa; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTa',
		'ta',
	),
)); ?>

</div>
</div>
