<?php
/* @var $this BidangKinerjaController */
/* @var $model BidangKinerja */

$this->breadcrumbs=array(
	'Bidang Kinerjas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List BidangKinerja', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin BidangKinerja', 'url'=>array('admin')),
);
?>

<h3>Tambah BidangKinerja Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>