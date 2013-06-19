<?php

class EmployeeController extends Controller
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
				'actions'=>array('index','view','report'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','report'),
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

        public function actionReport()
	{
            $model = new Employee;
		 $this->render('report',array('model'=>$model));	
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            	$model=new Employee;
                $persons = new Person;
                              
                $acHistory = new AcademicHistory;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                if(isset($_POST['Employee'],$_POST['Person'],$_POST['AcademicHistory']))
		{
                    
                    	$persons->attributes=$_POST['Person'];
                        $model->attributes=$_POST['Employee'];
                        $acHistory->attributes = $_POST['AcademicHistory'];                        
                    
                        $persons->per_entryDate = '2013-4-5';
                         
                        $maxID = Yii::app()->db->createCommand()
                                            ->select('max(personID) as max')
                                            ->from('tbl_person')
                                            ->queryScalar();
                       $model->employeeID = $maxID + 1;
                       $acHistory->personID = $model->employeeID;
                                             
                        if($persons->save() && $model->save() && $acHistory->save())
                                      $this->redirect(array('view','id'=>$model->employeeID));
                    
		}

		$this->render('create',array(
			'model'=>$model,'persons'=>$persons,'acHistory'=>$acHistory,
		));
                
            //$persons = new Person();
            /*if (isset($_POST['cancel'])) {
                  $this->redirect(array('index'));
            } 
            elseif (isset($_POST['step1'])) 
                {
                    
                    $this->setPageState('step1',$_POST['Person']); // save step1 into form state
                    $persons=new Person('step1');
                    $persons->per_entryDate = '2013-4-5';
                    $persons->attributes = $_POST['Person'];
                   
                    $model = new Employee('step2');
                    if($persons->validate())
                      $this->render('_form',array('model'=>$model));
                    else 
                    {
                      $this->render('_person',array('persons'=>$persons));
                    }
            } 
            elseif (isset($_POST['finish'])) 
            {
                    
                    $persons = new Person;
                    $persons->attributes = $this->getPageState('step1',array()); //get the info from step 1
                    //echo $persons->per_firstName;
                    
                    //$persons = $model;
                    echo $persons->per_firstName;
                    $model = new Employee('finish');
                    $model->attributes = $_POST['Employee']; // then the info from step2
                    $model->employeeID = $persons->personID;
                    if($model->validate())
                    {
                        //echo 'hello';
                        //$persons->save();
                      //  $model->save();
                        $this->redirect(array('index'));
                    }
                    else 
                      $this->render('_form',array('model'=>$model));
                 } 
             else 
             { // this is the default, first time (step1)
                  $persons=new Person('new');
                  $this->render('_person',array('persons'=>$persons));
             }*/ 
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

		if(isset($_POST['Employee'],$_POST['Person']))
		{
			$model->attributes=$_POST['Employee'];
                        $persons->attributes=$_POST['Person'];
			if($model->save() && $persons->save())
				$this->redirect(array('view','id'=>$model->employeeID));
		}

		
		$this->render('update',array(
			'model'=>$model,'persons'=>$persons
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
		$dataProvider=new CActiveDataProvider('Employee');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Employee('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Employee']))
			$model->attributes=$_GET['Employee'];

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
		$model=Employee::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
         public function loadPersonModel($id)
        {
                $modelPerson=  Person::model()->findByPk((int)$id);             
                if($modelPerson===null)   
                        throw new CHttpException(404,'The requested page does not exist.');
                return $modelPerson;
        }
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='employee-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
