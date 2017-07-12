<?php
/* @var $this DosenController */
/* @var $model Dosen */

$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	$model->idDosen,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Dosen', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Dosen', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Dosen', 'url'=>array('update', 'id'=>$model->idDosen)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Dosen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDosen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Dosen', 'url'=>array('admin')),
);
?>

<h3>Detil Kinerja Dosen</h3>

<div class="portlet">
	<div class="portlet-decoration">
	<div class="portlet-title">
		<i class="fa fa-briefcase"></i> <strong><?=  $model->namaDosen;?></strong>
	</div>
	</div>
	<div class="portlet-content">
		<div class="row-fluid">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'noSertifikat',
		'nidn',
		'namaDosen',
		'email',
		array(
			'name'=>'idPT',
			'type'=>'raw',
			'header'=>'Perguruan Tinggi',
			'value'=>$model->idPT0->namaPT,
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'idProdi',
			'type'=>'raw',
			'header'=>'Prodi',
			'value'=>$model->idProdi0->namaProdi,
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'idJabfung',
			'type'=>'raw',
			'header'=>'Jabatan Fungsional',
			'value'=>$model->idJabfung0->namaJabfung,
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'idGol',
			'type'=>'raw',
			'header'=>'Golongan',
			'value'=>$model->idGol0->namaGolongan,
			'htmlOptions'=>array('width'=>''),
		),
		'tglLahir',
		'tempatLahir',
		array(
			'name'=>'idJenisDosen',
			'type'=>'raw',
			'header'=>'Jenis Dosen',
			'value'=>$model->idJenisDosen0->namaJenisDosen,
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'idIlmu',
			'type'=>'raw',
			'header'=>'Keilmuan',
			'value'=>$model->idIlmu0->namaIlmu,
			'htmlOptions'=>array('width'=>''),
		),
		
	),
)); ?>

</div>
</div>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewKinerja',
	'summaryText'=>'',
)); ?>
	
