<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */

$this->breadcrumbs=array(
	'Kinerjas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kinerja', 'url'=>array('index')),
	array('label'=>'Manage Kinerja', 'url'=>array('admin')),
);
?>

<h1>Create Kinerja</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>