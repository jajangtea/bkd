<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */

$this->breadcrumbs=array(
	'Kinerja'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kinerja', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kinerja', 'url'=>array('admin')),
);
?>

<h3><?= Yii::t('zii','Create')?> Kinerja</h3>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>
