<?php
/* @var $this TaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tas',
);

$this->menu=array(
	array('label'=>'Create Ta', 'url'=>array('create')),
	array('label'=>'Manage Ta', 'url'=>array('admin')),
);
?>

<h1>Tas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
