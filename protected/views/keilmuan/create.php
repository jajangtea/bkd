<?php
/* @var $this KeilmuanController */
/* @var $model Keilmuan */

$this->breadcrumbs=array(
	'Keilmuans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Keilmuan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Keilmuan', 'url'=>array('admin')),
);
?>

<h3>Tambah Keilmuan Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>