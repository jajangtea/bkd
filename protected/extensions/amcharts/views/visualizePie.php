<script type="text/javascript">

	<?php  
		/* We will use timestamp to allow multiple instance of widget*/
		$currentTimestamp =  time() + rand(); // rand() is a hack to enable multiple chart instance
	?>

			var chart<?php echo $currentTimestamp; ?>;
			AmCharts.ready(function () {
                // PIE CHART
                chart<?php echo $currentTimestamp; ?> = new AmCharts.AmPieChart();
                <?php
                	foreach ($chart as $key=>$value)
                		echo "chart$currentTimestamp.$key= ".(($key=='dataProvider')? $value : "'$value'") .";\n";
                	
                ?>
                
            
                // LEGEND
                var legend<?php echo $currentTimestamp; ?> = new AmCharts.AmLegend();
                chart<?php echo $currentTimestamp; ?>.addLegend(legend<?php echo $currentTimestamp; ?>);

                // WRITE
                chart<?php echo $currentTimestamp; ?>.write("chartdiv<?php echo $currentTimestamp; ?>");
            });
//]]>
</script>

        <div id="chartdiv<?php echo $currentTimestamp; ?>" style="width: <?php echo $width; ?>px; height: <?php echo $height; ?>px;"></div>
