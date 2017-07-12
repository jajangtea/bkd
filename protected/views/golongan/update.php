<?php
/* @var $this GolonganController */
/* @var $model Golongan */

$this->breadcrumbs=array(
	'Golongans'=>array('index'),
	$model->idGol=>array('view','id'=>$model->idGol),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Golongan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Golongan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Golongan', 'url'=>array('view', 'id'=>$model->idGol)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Golongan', 'url'=>array('admin')),
);
?>

<h3>Ubah Golongan# <?php echo $model->idGol; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>