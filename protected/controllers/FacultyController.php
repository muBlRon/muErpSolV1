<?php

class FacultyController extends Controller
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
				'actions'=>array('index','view'),
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
            $model=new Faculty;
            $model->departmentID = yii::app()->session['departmentId'];
            
            $persons = new Person;
            $acHistory = new AcademicHistory;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                if(isset($_POST['Faculty'],$_POST['Person'],$_POST['AcademicHistory']))
		{
                    
                    	$persons->attributes=$_POST['Person'];
                        $model->attributes=$_POST['Faculty'];
                        $acHistory->attributes = $_POST['AcademicHistory'];                        
                    
                        $persons->per_entryDate = '2013-4-5';
                         
                        $maxID = Yii::app()->db->createCommand()
                                            ->select('max(personID) as max')
                                            ->from('tbl_person')
                                            ->queryScalar();
                       $model->facultyID = $maxID + 1;
                       $acHistory->personID = $model->facultyID;
                                             
                        if($persons->save() && $model->save() && $acHistory->save())
                                      $this->redirect(array('view','id'=>$model->facultyID));
                    
		}

		$this->render('create',array(
			'model'=>$model,'persons'=>$persons,'acHistory'=>$acHistory,
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
                
                //$persons = new Person;
        $persons = $this->loadPersonModel($id);
               
         //       $persons = $this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Faculty'],$_POST['Person'],$_POST['AcademicHistory']))
		{
			$model->attributes=$_POST['Faculty'];
                        $persons->attributes=$_POST['Person'];
                        $acHistory->attributes = $_POST['AcademicHistory'];
			if($model->save() && $persons->save() && $acHistory->save())
				$this->redirect(array('view','id'=>$model->facultyID));
		}

		
		$this->render('update',array(
			'model'=>$model,'persons'=>$persons,'acHistory'=>$acHistory,
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
		yii::app()->session['departmentId']=$id;
                
                $condition = "departmentID='{$id}'";
                
		
		$dataProvider=new CActiveDataProvider('Faculty', array(
                'criteria'=>array('condition'=>$condition),
                'pagination'=>array('pageSize'=>20,)
                 ));
		
                
                
                $this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Faculty('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Faculty']))
			$model->attributes=$_GET['Faculty'];

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
		$model=Faculty::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

         public function loadPersonModel($id)
        {
                $modelPerson=  Person::model()->findByPk((int)$id);             
                if($modelPerson===null)   
                        throw new CHttpException(404,'The requested page does not exist.');
                return $modelPerson;
        }
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='faculty-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
