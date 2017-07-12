<?php
/* @var $this AsesorController */
/* @var $model Asesor */

$this->breadcrumbs=array(
	'Asesors'=>array('index'),
	$model->idAsesor=>array('view','id'=>$model->idAsesor),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Asesor', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Asesor', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Asesor', 'url'=>array('view', 'id'=>$model->idAsesor)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Asesor', 'url'=>array('admin')),
);
?>

<h3>Ubah Asesor# <?php echo $model->idAsesor; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>