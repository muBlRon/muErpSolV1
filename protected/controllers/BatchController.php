<?php

class BatchController extends Controller
{
    
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
				'actions'=>array('index','view','getBatch'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','test'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
        
        
        public function actionCreate()
	{
            
                $model = new Batch;
                $model->programmeCode = yii::app()->session['programmeCode'];
                //$model->bat_term=$term;
                //$model->bat_year=  FormUtil::getYear();
                //echo FormUtil::getCurrentTerm();
                // Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);
                
                if (isset($_REQUEST['id']) &&  $_REQUEST['id']==1 )
                {
                    $_REQUEST['id']=0;
                    
                    $term=$_REQUEST['term'];
                    $year=$_REQUEST['year'];
                    
                    
                    $model->batchName =  FormUtil::getBatchFromProgrammeCode(yii::app()->session['programmeCode'],$term,$year);
                    $model->bat_term=$term;
                    $model->bat_year=$year;
                    
                   // echo $_REQUEST['Batch'];
                    
                    $this->renderPartial('create',array(
                            'model'=>$model,'form'=>'_form_2'
                    ));
                
                }
                elseif (!isset($_REQUEST['id']) || $_REQUEST['id']==0) 
                {
                  
                    if(isset($_POST['Batch']))
                    {
                        
			$model->attributes=$_POST['Batch'];
                        
                        if($model->validate())
                        {   
			if($model->save())
				$this->redirect(array('view','id'=>$model->batchName));
                        }
                    }
                  
                        $this->render('create',array(
                                'model'=>$model,'form'=>'_form_1'
                        ));
                  
                }
                 
                
                
	}

        public function actionTest()
        {
            
            
            $model=new Batch('test');
            $model->programmeCode = yii::app()->session['programmeCode'];
            // uncomment the following code to enable ajax-based validation
            $model->batchName=4;
            if(isset($_POST['ajax']) && $_POST['ajax']==='batch-form')
            {   
                
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            

            if(isset($_POST['Batch']))
            {
                $model->attributes=$_POST['Batch'];
                
                if($model->validate())
                { echo "submitted";
                    // form inputs are valid, do something here
                    return;
                }
            }
            $this->render('create',array('model'=>$model));
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

		if(isset($_POST['Batch']))
		{
			$model->attributes=$_POST['Batch'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->programmeCode));
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
	public function actionIndex($id)
	{
            
            /*
             * Diclearing session 'departmentID' and 'departmentName' for future use. 
             * 
             */
                yii::app()->session['programmeCode']=$id;
                yii::app()->session['programmeName']= DBhelper::getProgrammeNameById($id);
                
		
                $condition = "programmeCode='{$id}'";
                
		$dataProvider=new CActiveDataProvider('Batch', array(
                'criteria'=>array('condition'=>$condition),
                'pagination'=>array('pageSize'=>20,)
                 ));
                
                
                
                
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'id'=>$id,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Batch('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Batch']))
			$model->attributes=$_GET['Batch'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Batch the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Batch::model()->findByPk(array('batchName'=>$id,'programmeCode'=>yii::app()->session['programmeCode']));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


        
        
	/**
	 * Performs the AJAX validation.
	 * @param Batch $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='batch-form')
		{
                   
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
        }
}