<?php
/* @var $this SemesterController */
/* @var $model Semester */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	$model->idSemester=>array('view','id'=>$model->idSemester),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Semester', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Semester', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Semester', 'url'=>array('view', 'id'=>$model->idSemester)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Semester', 'url'=>array('admin')),
);
?>

<h3>Ubah Semester# <?php echo $model->idSemester; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>