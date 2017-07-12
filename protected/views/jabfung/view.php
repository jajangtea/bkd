<?php
/* @var $this JabfungController */
/* @var $model Jabfung */

$this->breadcrumbs=array(
	'Jabfungs'=>array('index'),
	$model->idJabfung,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Jabfung', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Jabfung', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Jabfung', 'url'=>array('update', 'id'=>$model->idJabfung)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Jabfung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idJabfung),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Jabfung', 'url'=>array('admin')),
);
?>

<h3>Detil Jabfung #<?php echo $model->idJabfung; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idJabfung',
		'namaJabfung',
	),
)); ?>

</div>
</div>
