<?php
/* @var $this JabfungController */
/* @var $model Jabfung */

$this->breadcrumbs=array(
	'Jabfungs'=>array('index'),
	$model->idJabfung=>array('view','id'=>$model->idJabfung),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Jabfung', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Jabfung', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Jabfung', 'url'=>array('view', 'id'=>$model->idJabfung)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Jabfung', 'url'=>array('admin')),
);
?>

<h3>Ubah Jabfung# <?php echo $model->idJabfung; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>