<?php
/* @var $this BidangKinerjaController */
/* @var $model BidangKinerja */

$this->breadcrumbs=array(
	'Bidang Kinerjas'=>array('index'),
	$model->idBidang=>array('view','id'=>$model->idBidang),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data BidangKinerja', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah BidangKinerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil BidangKinerja', 'url'=>array('view', 'id'=>$model->idBidang)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin BidangKinerja', 'url'=>array('admin')),
);
?>

<h3>Ubah BidangKinerja# <?php echo $model->idBidang; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>