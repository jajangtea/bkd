<?php
/* @var $this KeilmuanController */
/* @var $model Keilmuan */

$this->breadcrumbs=array(
	'Keilmuans'=>array('index'),
	$model->idIlmu=>array('view','id'=>$model->idIlmu),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Keilmuan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Keilmuan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Keilmuan', 'url'=>array('view', 'id'=>$model->idIlmu)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Keilmuan', 'url'=>array('admin')),
);
?>

<h3>Ubah Keilmuan# <?php echo $model->idIlmu; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>