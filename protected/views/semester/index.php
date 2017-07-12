<?php
/* @var $this SemesterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Semesters',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Semester', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Semester', 'url'=>array('admin')),
);
?>

<h1>Semesters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
