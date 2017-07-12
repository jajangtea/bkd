<?php
/* @var $this SemesterController */
/* @var $model Semester */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	$model->idSemester,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Semester', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Semester', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Semester', 'url'=>array('update', 'id'=>$model->idSemester)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Semester', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSemester),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Semester', 'url'=>array('admin')),
);
?>

<h3>Detil Semester #<?php echo $model->idSemester; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSemester',
		'namaSemester',
	),
)); ?>

</div>
</div>
