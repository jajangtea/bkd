<?php
/* @var $this KinerjaController */
/* @var $model Kinerja */

$this->breadcrumbs = array(
    'Kinerja' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => '<i class="icon icon-list"></i> Data Kinerja', 'url' => array('index')),
    array('label' => '<i class="icon icon-adjust"></i> Create Kinerja', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kinerja-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Kinerja</h3>

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
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Advanced Search', '#', array('class' => 'search-button btn btn-sm btn-primary')); ?></div>
    </div>
    <div class="portlet-content">

        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'kinerja-grid',
            'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
            'dataProvider' => $model->search(),
            //'filter' => $model,
            'template' => '{items}{pager}<br>{summary}',
            'columns' => array(
                array(
                    'header' => "No",
                    'value' => '($this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize)+
              array_search($data,$this->grid->dataProvider->getData())+1',
                ),
                //'idBidang',
                array(
                    'name' => 'idDosen',
                    'type' => 'raw',
                    'header' => 'Dosen',
                    'value' => '$data->idDosen0->namaDosen',
                    'htmlOptions' => array('width' => ''),
                ),
//                array(
//                    'name' => 'idBidang',
//                    'type' => 'raw',
//                    'header' => 'Bidang',
//                    'value' => '$data->idBidang0->namaBidang',
//                    'htmlOptions' => array('width' => ''),
//                ),
                'jenisKegiatan',
                'buktiPenugasan',
                'sksPenugasan',
                'masaPenugasan',
                'buktiDokumen',
                array(
                    'name' => 'tahun',
                    'type' => 'raw',
                    'header' => 'T.A',
                    'value' => '$data->tahun0->ta',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'name' => 'idRekomendasi',
                    'type' => 'raw',
                    'header' => 'Rekomendasi',
                    'value' => '$data->idRekomendasi0->rekomendasi',
                    'htmlOptions' => array('width' => ''),
                ),
                array(
                    'class' => 'CButtonColumn',
                ),
            ),
        ));
        ?>

    </div>
</div>
