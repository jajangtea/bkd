<?php
/* @var $this TaController */
/* @var $model Ta */

$this->breadcrumbs=array(
	'Tas'=>array('index'),
	$model->idTa,
);

$this->menu=array(
	array('label'=>'List Ta', 'url'=>array('index')),
	array('label'=>'Create Ta', 'url'=>array('create')),
	array('label'=>'Update Ta', 'url'=>array('update', 'id'=>$model->idTa)),
	array('label'=>'Delete Ta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ta', 'url'=>array('admin')),
);
?>

<h1>View Ta #<?php echo $model->idTa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTa',
		'ta',
	),
)); ?>
