<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */

$this->breadcrumbs=array(
	'Kinerjas'=>array('index'),
	$model->idKinerja=>array('view','id'=>$model->idKinerja),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kinerja', 'url'=>array('index')),
	array('label'=>'Create Kinerja', 'url'=>array('create')),
	array('label'=>'View Kinerja', 'url'=>array('view', 'id'=>$model->idKinerja)),
	array('label'=>'Manage Kinerja', 'url'=>array('admin')),
);
?>

<h1>Update Kinerja <?php echo $model->idKinerja; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>