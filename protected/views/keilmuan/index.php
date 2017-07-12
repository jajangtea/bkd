<?php
/* @var $this KeilmuanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keilmuans',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Keilmuan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Keilmuan', 'url'=>array('admin')),
);
?>

<h1>Keilmuans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
