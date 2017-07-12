<?php
/* @var $this DosenController */
/* @var $model Dosen */

$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Dosen', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Dosen', 'url'=>array('admin')),
);
?>

<h3>Tambah Dosen Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>