<?php

class AdmissionController extends Controller
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
				'actions'=>array('index','view','getBatch','getSection'),
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
		$model=new Admission;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Admission']))
		{
			$model->attributes=$_POST['Admission'];
			//if($model->save())
				$this->redirect(array('student/create','id'=>$model->studentID));
		}
                
                if(isset($_POST['sectionName']))
                {
                    
                    $this->renderPartial('create',array(
			'model'=>$model,'form'=>'_form_2'
                    ));
                    
                }
                else {
                    
                    
                    $this->render('create',array(
			'model'=>$model,'form'=>'_form_1'
                    ));
                    
                }
                
		
	}

        public function actionGetBatch()
        {
            
            
		if(isset($_POST['programmeCode']))
		{
			
                        
			//echo "programme code:".$_REQUEST['programmeCode'];
		
                    yii::app()->session['proCode']=$_POST['programmeCode'];

                    $model =  Batch::model()->findAllByAttributes(array('programmeCode'=>$_REQUEST['programmeCode']));
                    
                    if(!$model)
                    {
                        echo CHtml::tag('option',
                                          array('value'=>0),CHtml::encode("-- no batch found--"),true);
                    }
                    else    
                    {
                           $model=CHtml::listData($model,'batchName','batchName');
                           
                           
                           echo CHtml::tag('option',
                                          array('value'=>0),CHtml::encode("-Please Select-"),true);
                           
                           foreach($model as $value=>$name)
                           {
                               echo CHtml::tag('option',
                                          array('value'=>$value),CHtml::encode($name),true);
                           }

                    }
                }
        }
        
        public function actionGetSection()
        {
            
                yii::app()->session['batchName']=$_POST['batchName'];
		if(isset($_POST['batchName']))
		{
			
                        
			//echo "programme code:".$_REQUEST['programmeCode'];
		
            

                    $model =  Section::model()->findAllByAttributes(array('programmeCode'=>yii::app()->session['proCode'],'batchName'=>$_REQUEST['batchName']));
                 
                       if(!$model)
                    {
                        echo CHtml::tag('option',
                                          array('value'=>0),CHtml::encode("--No Section Found--"),true);
                    }
                    else    
                    {
                 

                        

                        echo CHtml::tag('option',
                                          array('value'=>0),CHtml::encode("-Please Select-"),true);
                        $model=CHtml::listData($model,'sectionName','sectionName');
                        
                        foreach($model as $value=>$name)
                        {
                           echo CHtml::tag('option',
                                      array('value'=>$value),CHtml::encode($name),true);
                        }

                    }  
                   
                }
                
                
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

		if(isset($_POST['Admission']))
		{
			$model->attributes=$_POST['Admission'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->studentID));
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
		$dataProvider=new CActiveDataProvider('Admission');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Administration('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Admission']))
			$model->attributes=$_GET['Admission'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Administration::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='admission-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
