<?php

/**
 * Copyright (c) 2010 Lucas Gómez <luckas1984@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * The minimal code needed to use EAmchartWidget is as follows:
 *
 * <pre>
 * <?php
 * //CONTROLLER
 * 
 * //*Using a CActiveDataProvider
 * 
 * //$dataProvider = new CActiveDataProvider('ChartData');
 * 
 * 
 * //*Using a CArrayDataProvider
 * 
 * 
 * //SQL Query
 * 		
 * 		$oDbConnection = Yii::app()->db; // Getting database connection (config/main.php has to set up database
 * 		// Here you will use your complex sql query using a string or other yii ways to create your query
 * 		$oCommand = $oDbConnection->createCommand('SELECT * FROM chart_data');
 * 		
 * 		$oCDbDataReader = $oCommand->queryAll(); // Run query and get all results in a CDbDataReader
 * 
 * // Set DataProvider
 * 		$dataProvider=new CArrayDataProvider($oCDbDataReader, array(
 * 				'keyField' => 'ID'
 * 		));
 * 
 * $this->render('AmChart',array('dataProvider'=>$dataProvider));
 * 
 * 
 * //VIEW
 * 
 * $this->widget('ext.amcharts.EAmChartWidget', 
 * 					array(
 * 						'width' => 700,
 * 						'height' => 400,
 * 						'chart'=>array(
 * 									'dataProvider'=>$dataProvider,
 * 									'categoryField' => 'time'
 * 									),
 * 						'chartType' => "AmSerialChart",
 * 						'graphs'=>array(
 * 									array(
 * 										'valueField' => 'data',
 * 										'title'=>'Data graph',
 * 										'type' => 'column'
 * 									)),
 * 						'categoryAxis'=>array(
 * 									'title'=>'Time'
 * 									),
 * 						'valueAxis'=>array(
 * 									'title'=>'Data')
 * 	));
 * </pre>
 *
 *
 * This widget for use with the Yii Framework utilises the Amchart plugin visualize
 * (http://www.amcharts.com/) to render graphs and
 * charts for your web application.
 *
 * For information on istallation and useage please visit the porjects hosting page
 * on google code: http://code.google.com/p/yii-amchart-widget/
 */
Yii::import('application.extensions.amcharts.components.*');

class EAmchartWidget extends CWidget
{	
	
	/**
	 * @var String
	 * Width of Chart
	 */
	public $width=400;
	
	/**
	 * @var string
	 * Height of Chart
	 */
	public $height=400;
	
	
	/**
	 * @var array
	 * Collection of option to customize the chart
	 */
	public $chart = array();
	
	
	/**
	 * @var string
	 * Type of Chart: AmSerialChart, AmPieChart, AmXYChart, AmRadarChart
	 */
	public $chartType = "AmSerialChart";
	
	
	/**
	 * @var array
	 * Collection of Charts that will be displayed on Chart
	 */
	public $graphs = array();
	
	
	/**
	 * @var array
	 * Collection of option to customize the Cateogry Axis
	 */
	public $categoryAxis = array();
	
	/**
	 * @var array
	 * Collection of option to customize the Value Axis
	 */
	public $valueAxis = array();
	
	/**
	* @var array 
	* Valid chart types
	*/
	private $_validChartTypes = array('column','bar','line','area','pie');
	
	
	/**
	 * @var array
	 * Default AmSerialChart Options
	 */
	private $_defaultsAmSerialChartOptions = array(
				'fontFamily'=>'Arial,Helvetica, Sans',
				'startDuration'=>'1',
				'dataProvider'=>array(),
				'categoryField'=> ''
			);
	
	
	/**
	 * @var array
	 * Default AmXYChart Options
	 */
	private $_defaultsAmXYChartOptions = array(
			//'pathToImages' => Yii::app()->getAssetManager()->publish(dirname(__FILE__))."/assets/images/",
			'panEventsEnabled' => true,
			'marginRight' => 0,
			'marginTop' => 0,
			'startDuration' => 1
	);
	
	
	/**
	 * @var array
	 * Default AmPieChart Options
	 */
	private $_defaultsAmPieChartOptions = array(
			'fontFamily'=>'Arial,Helvetica, Sans',
			'startDuration'=>'1',
			'dataProvider'=>array(),
			'sequencedAnimation' => true,
			'startEffect' => 'elastic',
			'innerRadius' => '30%',
			'startDuration' => 2,
			'labelRadius' => 10,
			'radius' => '45%',
			'pullOutRadius' => 1,
	);

	
	/**
	 * @var array
	 * AmGraph Options
	 */
	private $_defaultsAmGraphOptions = array(
			'title'=>'',
			'lineColor'=>'#CCCCCC',
			'lineAlpha'=>'1',
			'lineThickness' => '1',
			'fillColors'=>'#CCCCCC',
			'fillAlphas'=>'1',
			'valueField'=> '',
			'type'=>'column'
	);
	
	
    /**
     * @var int
     */
    private static $count = 0;
	
	
	/**
	 * The initialisation method
	 */
	public function init()
	{
        
		// ensure valid chart type selected
		foreach ($this->graphs as $graph)
			if(!in_array($graph['type'], $this->_validChartTypes))
				throw new CException($graph['type'] . ' is an invalid chart type. Valid charts are ' . implode(',',$this->_validChartTypes));
		
		// check dataProvider is present
		if(empty($this->chart['dataProvider']))
			throw new CException('Please provide some dataProvider to render a display');
		
		$this->_registerWidgetScripts();
		
		parent::init();
	}
	
	
	/**
	 * registerCoreScripts
	 */
	private function _registerWidgetScripts()
	{
		$cs=Yii::app()->getClientScript();
		//$cs->registerCoreScript('jquery');
		
		$basePath = Yii::getPathOfAlias('application.extensions.amcharts.assets');
		$baseUrl = Yii::app()->getAssetManager()->publish($basePath);
		
		$cs->registerScriptFile($baseUrl.'/amcharts.js');
	}
	
	/*
	 * Array Obfuscation
	 * 
	 */
	private static function renameKeys(&$array, $replacement_keys)
	{
		$array = array_combine(array_keys($array), $replacement_keys);
	}
	
	/**
	 * Render the output
	 */
	public function run()
	{	
		$newArray = array();
		
		if($this->chart['dataProvider'] instanceof CActiveDataProvider)
		{
			$this->chart['dataProvider'] = $this->chart['dataProvider']->getData();
			
			foreach ($this->chart['dataProvider'] as $modelData)
				$newArray[] = $modelData->attributes;
		}
		else if($this->chart['dataProvider'] instanceof IDataProvider)
		{
			$newArray=$this->chart['dataProvider']->getData();
		}
		
			
		//foreach ($this->Graphs as $graph)
			//$graph['valueField'] = md5($graph['valueField']);
		
		$this->chart['dataProvider'] = json_encode($newArray);
		
		
		foreach ($this->graphs as &$graph)
			$graph = array_merge($this->_defaultsAmGraphOptions, $graph);

		
		switch ($this->chartType)
		{
			case  AmChartTypes::AmPieChart :
							$this->render('visualizeSerial',
								array(
									'chart'=>array_merge($this->_defaultsAmPieChartOptions, $this->chart),
									'chartType'=>$this->chartType,
									'width'=>$this->width,
									'height'=>$this->height
								),
								false
							);
							break;
			default:// AmChartTypes::AmSerialChart:
							$this->render('visualizeSerial',
								array(
									'chart'=>array_merge($this->_defaultsAmSerialChartOptions, $this->chart),
									'chartType'=>$this->chartType,
									'graphs'=>$this->graphs,
									'categoryAxis'=>$this->categoryAxis,
									'valueAxis'=>$this->valueAxis,
									'width'=>$this->width,
									'height'=>$this->height
								),
								false
							);
		}
	}
	
}


?>
