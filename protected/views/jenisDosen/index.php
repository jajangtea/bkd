<?php
/* @var $this JenisDosenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Dosens',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create JenisDosen', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage JenisDosen', 'url'=>array('admin')),
);
?>

<h1>Jenis Dosens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
