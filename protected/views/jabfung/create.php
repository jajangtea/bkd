<?php
/* @var $this JabfungController */
/* @var $model Jabfung */

$this->breadcrumbs=array(
	'Jabfungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Jabfung', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Jabfung', 'url'=>array('admin')),
);
?>

<h3>Tambah Jabfung Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>