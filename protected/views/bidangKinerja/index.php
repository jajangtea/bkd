<?php
/* @var $this BidangKinerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bidang Kinerjas',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create BidangKinerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage BidangKinerja', 'url'=>array('admin')),
);
?>

<h1>Bidang Kinerjas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
