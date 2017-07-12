<?php
/* @var $this BidangKinerjaController */
/* @var $model BidangKinerja */

$this->breadcrumbs=array(
	'Bidang Kinerjas'=>array('index'),
	$model->idBidang,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List BidangKinerja', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create BidangKinerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update BidangKinerja', 'url'=>array('update', 'id'=>$model->idBidang)),
	array('label'=>'<i class="icon icon-trash"></i> Delete BidangKinerja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idBidang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage BidangKinerja', 'url'=>array('admin')),
);
?>

<h3>Detil BidangKinerja #<?php echo $model->idBidang; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idBidang',
		'namaBidang',
	),
)); ?>

</div>
</div>
