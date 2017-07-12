<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs = array(
    'TA' => array('index'),
    'Admin',
);

$this->menu = array(
    array('label' => '<i class="icon icon-list"></i> Data TA', 'url' => array('index')),
    array('label' => '<i class="icon icon-adjust"></i> Tambah TA', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prodi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data TA</h3>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<div class="portlet">
    <div class="portlet-decoration">
        <div class="portlet-title">
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Pencarian Lanjut', '#', array('class' => 'search-button btn btn-sm btn-primary')); ?></div>
    </div>
    <div class="portlet-content">

        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'ta-grid',
            'dataProvider' => $model->search(),
            //'filter' => $model,
            'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
            'columns' => array(
                array(
                    'header' => "No",
                    'value' => '($this->grid->dataProvider->pagination->currentPage*
                                               $this->grid->dataProvider->pagination->pageSize
                                              )+
                                              array_search($data,$this->grid->dataProvider->getData())+1',
                    'htmlOptions' => array(
                        'style' => 'width: 2%; text-align: center;',
                    ),
                ),
                'ta',
                array(
                    'class' => 'CButtonColumn',
                ),
            ),
        ));
        ?>
    </div>
</div>