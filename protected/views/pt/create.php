<?php
/* @var $this PtController */
/* @var $model Pt */

$this->breadcrumbs=array(
	'Pts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Pt', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Pt', 'url'=>array('admin')),
);
?>

<h3>Create Pt</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>