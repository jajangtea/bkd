<?php
/* @var $this PtController */
/* @var $model Pt */

$this->breadcrumbs=array(
	'Pts'=>array('index'),
	$model->idPT=>array('view','id'=>$model->idPT),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Pt', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Pt', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View Pt', 'url'=>array('view', 'id'=>$model->idPT)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Pt', 'url'=>array('admin')),
);
?>

<h3>Update Pt <?php echo $model->idPT; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>