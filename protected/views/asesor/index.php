<?php
/* @var $this AsesorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asesors',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Asesor', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Asesor', 'url'=>array('admin')),
);
?>

<h1>Asesors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
