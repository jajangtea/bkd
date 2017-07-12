<?php
/* @var $this AsesorController */
/* @var $model Asesor */

$this->breadcrumbs=array(
	'Asesors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Asesor', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Asesor', 'url'=>array('admin')),
);
?>

<h3>Tambah Asesor Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>