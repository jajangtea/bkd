<?php
/* @var $this JenisDosenController */
/* @var $model JenisDosen */

$this->breadcrumbs=array(
	'Jenis Dosens'=>array('index'),
	$model->idJenisDosen,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List JenisDosen', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create JenisDosen', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update JenisDosen', 'url'=>array('update', 'id'=>$model->idJenisDosen)),
	array('label'=>'<i class="icon icon-trash"></i> Delete JenisDosen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idJenisDosen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage JenisDosen', 'url'=>array('admin')),
);
?>

<h3>Detil JenisDosen #<?php echo $model->idJenisDosen; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idJenisDosen',
		'kodeJenisDosen',
		'namaJenisDosen',
	),
)); ?>

</div>
</div>
