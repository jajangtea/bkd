<?php
/* @var $this GolonganController */
/* @var $model Golongan */

$this->breadcrumbs=array(
	'Golongans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Golongan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Golongan', 'url'=>array('admin')),
);
?>

<h3>Tambah Golongan Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>