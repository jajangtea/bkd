<?php
/* @var $this KinerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kinerjas',
);

$this->menu=array(
	array('label'=>'Create Kinerja', 'url'=>array('create')),
	array('label'=>'Manage Kinerja', 'url'=>array('admin')),
);
?>

<h1>Kinerjas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
