<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */

$this->breadcrumbs=array(
	'Kinerja'=>array('index'),
	$model->idKinerja=>array('view','id'=>$model->idKinerja),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kinerja', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kinerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View Kinerja', 'url'=>array('view', 'id'=>$model->idKinerja)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kinerja', 'url'=>array('admin')),
);
?>

<h3>Update Kinerja <?php echo $model->idKinerja; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>