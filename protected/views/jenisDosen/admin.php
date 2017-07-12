<?php
/* @var $this JenisDosenController */
/* @var $model JenisDosen */

$this->breadcrumbs=array(
	'Jenis Dosens'=>array('index'),
	'Admin',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data JenisDosen', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah JenisDosen', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jenis-dosen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Jenis Dosens</h3>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Pencarian Lanjut','#',array('class'=>'search-button btn btn-sm btn-primary')); ?></div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jenis-dosen-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'idJenisDosen',
		'kodeJenisDosen',
		'namaJenisDosen',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
