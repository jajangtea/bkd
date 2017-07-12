<?php
/* @var $this KinerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kinerja',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Kinerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Kinerja', 'url'=>array('admin')),
);
?>

<h1>Kinerja</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
