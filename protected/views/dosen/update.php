<?php
/* @var $this DosenController */
/* @var $model Dosen */

$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	$model->idDosen=>array('view','id'=>$model->idDosen),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Dosen', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Dosen', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Dosen', 'url'=>array('view', 'id'=>$model->idDosen)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Dosen', 'url'=>array('admin')),
);
?>

<h3>Ubah Dosen# <?php echo $model->idDosen; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>