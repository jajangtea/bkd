<?php
/* @var $this TaController */
/* @var $model Ta */

$this->breadcrumbs=array(
	'Tas'=>array('index'),
	$model->idTa=>array('view','id'=>$model->idTa),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Ta', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Ta', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Ta', 'url'=>array('view', 'id'=>$model->idTa)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Ta', 'url'=>array('admin')),
);
?>

<h3>Ubah Ta# <?php echo $model->idTa; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>