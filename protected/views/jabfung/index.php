<?php
/* @var $this JabfungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jabfungs',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Jabfung', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Jabfung', 'url'=>array('admin')),
);
?>

<h1>Jabfungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
