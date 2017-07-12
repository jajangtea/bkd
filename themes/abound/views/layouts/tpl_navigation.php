<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#"><?php echo Yii::app()->name; ?></small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'<i class="fa fa-institution"></i> Dashboard', 'url'=>array('/site/index')),
                        array('label'=>'<i class="fa fa-cube"></i> Master Data <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
							array('label'=>'<i class="fa fa-cube"></i> Data Dosen', 'url'=>array('/dosen/create')),
							array('label'=>'<i class="fa fa-cube"></i> Data Kinerja', 'url'=>array('/kinerja')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Perguruan Tinggi', 'url'=>array('/pt')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Bidang', 'url'=>array('/bidangkinerja')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Golongan', 'url'=>array('/golongan')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Prodi', 'url'=>array('/prodi')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Keilmuan', 'url'=>array('/keilmuan')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Tahun Ajaran', 'url'=>array('/ta')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Semester', 'url'=>array('/semester')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Jabatan Fungsional  ', 'url'=>array('/jabfung')),
                            array('label'=>'<i class="fa fa-cube"></i> Data Jenis Dosen', 'url'=>array('/jenisdosen')),
							array('label'=>'<i class="fa fa-cube"></i> Data Asesor', 'url'=>array('/asesor')),
                        ), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'<i class="fa fa-signal"></i> Data Kinerja Dosen', 'url'=>array('/dosen/index'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'<i class="fa fa-user"></i> Account', 'url'=>array('/users'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'<i class="fa fa-user"></i> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'<i class="fa fa-share"></i> Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/banner.jpg">
</div><!-- subnav -->