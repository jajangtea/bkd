<?php
/* @var $this TaController */
/* @var $model Ta */

$this->breadcrumbs=array(
	'Tas'=>array('index'),
	'Tambah',
);

$this->menu=array(
	array('label'=>'List Ta', 'url'=>array('index')),
	array('label'=>'Manage Ta', 'url'=>array('admin')),
);
?>

<h1>Tambah Ta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>