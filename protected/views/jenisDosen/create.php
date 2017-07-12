<?php
/* @var $this JenisDosenController */
/* @var $model JenisDosen */

$this->breadcrumbs=array(
	'Jenis Dosens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List JenisDosen', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin JenisDosen', 'url'=>array('admin')),
);
?>

<h3>Tambah JenisDosen Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>