<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */

$this->breadcrumbs=array(
	'Kinerjas'=>array('index'),
	$model->idKinerja,
);

$this->menu=array(
	array('label'=>'List Kinerja', 'url'=>array('index')),
	array('label'=>'Create Kinerja', 'url'=>array('create')),
	array('label'=>'Update Kinerja', 'url'=>array('update', 'id'=>$model->idKinerja)),
	array('label'=>'Delete Kinerja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idKinerja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kinerja', 'url'=>array('admin')),
);
?>

<h1>View Kinerja #<?php echo $model->idKinerja; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idKinerja',
		'idBidang',
		'jenisKegiatan',
		'buktiPenugasan',
		'sksPenugasan',
		'masaPenugasan',
		'buktiDokumen',
		'sksDokumen',
		'idRekomendasi',
		'tahun',
		'idDosen',
	),
)); ?>
