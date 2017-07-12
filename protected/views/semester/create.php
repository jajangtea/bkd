<?php
/* @var $this SemesterController */
/* @var $model Semester */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Semester', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Semester', 'url'=>array('admin')),
);
?>

<h3>Tambah Semester Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>