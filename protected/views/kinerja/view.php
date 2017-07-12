<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */

$this->breadcrumbs=array(
	'Kinerja'=>array('index'),
	$model->idKinerja,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kinerja', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kinerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Kinerja', 'url'=>array('update', 'id'=>$model->idKinerja)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Kinerja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idKinerja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kinerja', 'url'=>array('admin')),
);
?>

<h3>View Kinerja #<?php echo $model->idKinerja; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array(
			'name'=>'idDosen',
			'type'=>'raw',
			'header'=>'Dosen',
			'value'=>$model->idDosen0->namaDosen,
			'htmlOptions'=>array('width'=>''),
		),
        array(
			'name'=>'idBidang',
			'type'=>'raw',
			'header'=>'Bidang',
			'value'=>$model->idBidang0->namaBidang,
			'htmlOptions'=>array('width'=>''),
		),
		'jenisKegiatan',
		'buktiPenugasan',
		'sksPenugasan',
		'masaPenugasan',
		'buktiDokumen',
		array(
			'name'=>'idBidang',
			'type'=>'raw',
			'header'=>'Bidang',
			'value'=>$model->idRekomendasi0->rekomendasi,
			'htmlOptions'=>array('width'=>''),
		),
//                array(
//			'name'=>'idasesor1',
//			'type'=>'raw',
//			'header'=>'Asesor 1',
//			'value'=>$model->idasesor10->nama,
//			'htmlOptions'=>array('width'=>''),
//		),
//		array(
//			'name'=>'idasesor2',
//			'type'=>'raw',
//			'header'=>'Asesor 2',
//			'value'=>$model->idasesor20->nama,
//			'htmlOptions'=>array('width'=>''),
//		),
		array(
			'name'=>'idSemester',
			'type'=>'raw',
			'header'=>'Semester',
			'value'=>$model->idSemester0->namaSemester,
			'htmlOptions'=>array('width'=>''),
		),
	),
)); ?>

</div>
</div>
