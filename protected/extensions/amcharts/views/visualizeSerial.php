<?php
Yii::import('application.extensions.amcharts.components.AmChartTypes'); ?>

<script type="text/javascript">

	<?php  
		/* We will use timestamp to allow multiple instance of widget*/
		$currentTimestamp =  time() + rand(); // rand() is a hack to enable multiple chart instance 
	?>

	var chart<?php echo $currentTimestamp; ?>;

            AmCharts.ready(function () {
                // SERIAL CHART
                chart<?php echo $currentTimestamp; ?> = new AmCharts.<?php echo $chartType; ?>();
                <?php
                	foreach ($chart as $key=>$value)
                		echo "chart$currentTimestamp.$key= ".(($key=='dataProvider')? $value : "'$value'") .";\n";
                	
                ?>

				<?php if($chartType != AmChartTypes::AmPieChart ){ ?>
	                
	            	// AXES
	                // category axis
	                var categoryAxis<?php echo $currentTimestamp; ?> = chart<?php echo $currentTimestamp; ?>.categoryAxis;
	                <?php
					foreach ($categoryAxis as $key=>$value)
						echo "categoryAxis$currentTimestamp.$key= '$value';\n";  	
					?>
	
	                // value axis
	                var valueAxis<?php echo $currentTimestamp; ?> = new AmCharts.ValueAxis();
	                <?php
	        			foreach ($valueAxis as $key=>$value)
	        				echo "valueAxis$currentTimestamp.$key= '$value';\n";  	
	        		?>
	                chart<?php echo $currentTimestamp; ?>.addValueAxis(valueAxis<?php echo $currentTimestamp; ?>);
				
	                // GRAPHS
	                <?php
	                // generate every chart
	                foreach ($graphs as $graph)
	                {
	                	$chartTimestamp= time();
	                ?>
	               		var graph<?php echo $chartTimestamp; ?> = new AmCharts.AmGraph();
	    			<?php
	    				// generate attributes chart
	    				foreach ($graph as $key=>$value)
	    					echo "graph$chartTimestamp.$key= '$value';\n";
	    			?>                   
	                    chart<?php echo $currentTimestamp; ?>.addGraph(graph<?php echo $chartTimestamp; ?>);
	                <?php
	                }
	                ?>
	            <?php } // if ($chartType != AmChartTypes::AmPieChart ) ?>

            
				// LEGEND
				var legend<?php echo $currentTimestamp; ?> = new AmCharts.AmLegend();
				chart<?php echo $currentTimestamp; ?>.addLegend(legend<?php echo $currentTimestamp; ?>);

				// WRITE
				chart<?php echo $currentTimestamp; ?>.write("chartdiv<?php echo $currentTimestamp; ?>");
            });
//]]>
</script>

<div id="chartdiv<?php echo $currentTimestamp; ?>" style="width: <?php echo $width; ?>px; height: <?php echo $height; ?>px;"></div>
