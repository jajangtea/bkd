<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Prodi', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Prodi', 'url'=>array('admin')),
);
?>

<h3>Tambah Prodi Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>