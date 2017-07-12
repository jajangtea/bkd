<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->idPordi=>array('view','id'=>$model->idPordi),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Prodi', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Prodi', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Prodi', 'url'=>array('view', 'id'=>$model->idPordi)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Prodi', 'url'=>array('admin')),
);
?>

<h3>Ubah Prodi# <?php echo $model->idPordi; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>