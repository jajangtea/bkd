<?php
/* @var $this PtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pts',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Pt', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Pt', 'url'=>array('admin')),
);
?>

<h1>Pts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
