<?php
/* @var $this TaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tas',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Ta', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Ta', 'url'=>array('admin')),
);
?>

<h1>Tas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
