<?php
	/**
	* Intructions:
	*	- Create Table and Insert in your MySQL instance
	*	- Unzip the widget into your project extension folder
	*	- set in one Controller the dataProveder Instance
	*	- Make the widget call in one View
	**/
?>

<?php

// SQL Table Model
/*
-- ----------------------------
-- Table structure for `chart_data`
-- ----------------------------
DROP TABLE IF EXISTS `chart_data`;
CREATE TABLE `chart_data` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `time` time DEFAULT NULL,
  `data` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
 
-- ----------------------------
-- Records of chart_data
-- ----------------------------
INSERT INTO chart_data VALUES ('1', '14:27:55', '2');
INSERT INTO chart_data VALUES ('2', '14:28:43', '4');
INSERT INTO chart_data VALUES ('3', '14:28:55', '1');
INSERT INTO chart_data VALUES ('4', '14:29:18', '8');
INSERT INTO chart_data VALUES ('5', '14:29:31', '5');
*/

?>

<?php

// Controller

/**
*Using a CActiveDataProvider
**/
//$dataProvider = new CActiveDataProvider('ChartData');

/**
*Using a CArrayDataProvider
**/

//SQL Query
		
		$oDbConnection = Yii::app()->db; // Getting database connection (config/main.php has to set up database
		// Here you will use your complex sql query using a string or other yii ways to create your query
		$oCommand = $oDbConnection->createCommand('SELECT * FROM chart_data');
		
		$oCDbDataReader = $oCommand->queryAll(); // Run query and get all results in a CDbDataReader

// Set DataProvider
		$dataProvider=new CArrayDataProvider($oCDbDataReader, array(
				'keyField' => 'ID'
		));

$this->render('AmChart',array('dataProvider'=>$dataProvider));
?>


<?php
//View

$this->widget('ext.amcharts.EAmChartWidget', 
					array(
						'width' => 700,
						'height' => 400,
						'chart'=>array(
									'dataProvider'=>$dataProvider,
									'categoryField' => 'time'
									),
						'chartType' => "AmSerialChart",
						'graphs'=>array(
									array(
										'valueField' => 'data',
										'title'=>'Data graph',
										'type' => 'column'
									)),
						'categoryAxis'=>array(
									'title'=>'Time'
									),
						'valueAxis'=>array(
									'title'=>'Data')
	));

?>