<?php
/* @var $this DosenController */
/* @var $model Dosen */

$this->breadcrumbs=array(
	'Dosen'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Dosen', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Dosen', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dosen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?></div>
</div>
<div class="portlet-content">

    <h2>Data Dosen</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dosen-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		array(
        'header'=>"No",
        'value'=>'($this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize)+
              array_search($data,$this->grid->dataProvider->getData())+1',
        ),
		'noSertifikat',
		'nidn',
		'namaDosen',
		'idPT',
		'idProdi',
		'idJabfung',
		'idGol',
		'tglLahir',
		'tempatLahir',
		'idJenisDosen',
		'idIlmu',
		//'idTA',
		'idasesor1',
		'idasesor2',
		'email',
		//'idSemester',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
<div class="portlet-content">

    <h2>Kinerja Dosen</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kinerja-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model1->search(),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
        array(
        'header'=>"No",
        'value'=>'($this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize)+
              array_search($data,$this->grid->dataProvider->getData())+1',
        ),
		//'idBidang',
        array(
			'name'=>'idBidang',
			'type'=>'raw',
			'header'=>'Bidang',
			'value'=>'CHtml::encode($data->idBidang0->namaBidang)',
			'htmlOptions'=>array('width'=>''),
		),
		'jenisKegiatan',
		'buktiPenugasan',
		'sksPenugasan',
		'masaPenugasan',
		
		'buktiDokumen',
		'sksDokumen',
		array(
			'name'=>'idRekomendasi',
			'type'=>'raw',
			'header'=>'Rekomendasi',
			'value'=>'CHtml::encode($data->idRekomendasi0->rekomendasi)',
			'htmlOptions'=>array('width'=>''),
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div></div>
