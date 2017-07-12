<?php

class DosenController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','indexdx','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		
		
		$dataProvider=new CActiveDataProvider('Kinerja',array(
      'criteria'=>array(
        'condition'=>'idDosen ='.$id,
      ),
    ));
		

		$this->layout='column1';
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Dosen;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dosen']))
		{
			$model->attributes=$_POST['Dosen'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idDosen));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dosen']))
		{
			$model->attributes=$_POST['Dosen'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idDosen));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Dosen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dosen']))
			$model->attributes=$_GET['Dosen'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dosen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dosen']))
			$model->attributes=$_GET['Dosen'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Dosen the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Dosen::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Dosen $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dosen-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionIndexdx()
	{
		$model=new Dosen('search');
        $model1=new Kinerja('search');
		$model->unsetAttributes();  // clear any default values
        $model1->unsetAttributes(); 
		if(isset($_GET['Dosen']) && isset($_GET['Kinerja']))
			$model->attributes=$_GET['Dosen'];
			$model->attributes=$_GET['Kinerja'];
		$this->layout='column1';
		$this->render('adminx',array(
			'model'=>$model,
            'model1'=>$model1,
		));
	}
}
