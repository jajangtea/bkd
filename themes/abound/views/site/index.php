<div class="row-fluid" id="wrapper" style="position: relative;">
<div class="span3" id="sidebar" style="height:100%; position:relative;">
        <ul class="nav-list">    
        <div class="portlet">
			<div class="portlet-decoration">
			  <div class="portlet-title">
				<i class="icon icon-wrench"></i> Navigasi
			  </div>
			</div>
			<?php 
				Yii::app()->clientScript->registerScript('search', "
				$('.search-button').click(function(){
					$('.search-form').toggle();
					return false;
				});
				");
			?>
			<div class="portlet-content">
				<div class="search-form" style="display:none">
				<?php $this->renderPartial('_search',array(
					'modelKinerja'=>$modelKinerja,
				)); ?>
				</div><!-- search-form -->
			<div class="portlet">
			<div class="portlet-decoration">
				<div class="portlet-title">
					<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Pencarian Lanjut','#',array('class'=>'search-button btn btn-sm btn-primary')); ?></div>
				</div>
			</div>
		</div> 
        </ul>
</div>
<div class="center span9" id="contentpane" style="height:100%; position: relative;">
    
  
<?php
				//print_r($aktif);
                echo '<h2> Grafik Kinerja Dosen Berdasarkan Bidang</h2>';
                $this->widget('application.extensions.amcharts.EAmChartWidget', 
                    array(
                        'width' => 700, // width of the Chart
                        'height' => 400, // height of the chart
                        'chart'=>array(// collections of grpah to display into the chart
                                    'dataProvider'=>$dataProvider, // DataProvider
                                    'categoryField' => 'ta' // Field of the DataProvider to set on the X Axis
                                    ),
                        'graphs'=>array(
                                array(
                                    'valueField' => 'Pendidikan', // Field of the DataProvider to set the Y Axis
                                    'title'=>'Pendidikan', // Title of the , used on the Legend
                                    'type' => 'column', // Type of Graph
                                    'fillColors'=>'#FFB100',
                                    'lineColor'=>'#FFB100',
                                ),
                            array(
                                    'valueField' => 'Penelitian', // Field of the DataProvider to set the Y Axis
                                    'title'=>'Penelitian', // Title of the , used on the Legend
                                    'type' => 'column', // Type of Graph
                                    'fillColors'=>'#EE2299',
                                    'lineColor'=>'#EE2299',
                                ),
                            array(
                                    'valueField' => 'Pengabdian', // Field of the DataProvider to set the Y Axis
                                    'title'=>'Pengabdian', // Title of the , used on the Legend
                                    'type' => 'column', // Type of Graph
                                    'fillColors'=>'#20317F',
                                    'lineColor'=>'#20317F',
                                )),
                                
                        'categoryAxis'=>array(
                                    'title'=>'Bidang'
                                    ),
                        'valueAxis'=>array(
                                    'title'=>'Jumlah Kegiatan')
						)); ?>
                
                
               
            
    
    
    
</div>

    
    
</div><!--/row-->
