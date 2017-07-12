<?php
/* @var $this JenisDosenController */
/* @var $model JenisDosen */

$this->breadcrumbs=array(
	'Jenis Dosens'=>array('index'),
	$model->idJenisDosen=>array('view','id'=>$model->idJenisDosen),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data JenisDosen', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah JenisDosen', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil JenisDosen', 'url'=>array('view', 'id'=>$model->idJenisDosen)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin JenisDosen', 'url'=>array('admin')),
);
?>

<h3>Ubah JenisDosen# <?php echo $model->idJenisDosen; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>