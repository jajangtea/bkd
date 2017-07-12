<?php
/* @var $this TaController */
/* @var $model Ta */

$this->breadcrumbs=array(
	'Tas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Ta', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Ta', 'url'=>array('admin')),
);
?>

<h3>Tambah Ta Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>