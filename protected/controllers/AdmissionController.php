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
				'actions'=>array('create','update','getAdmission'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete',),
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

        
        
        public function actionGetAdmission()
        {
            
            
            $admission = new Admission();
            $form = "_form_1";
            $this->render('create',array(
			'admission'=>$admission, 'form'=>$form
                    ));
            
        }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
                $flag=false;
                    if(isset($_POST['sectionName']))
                    {
                        
                        yii::app()->session['secName']=$_POST['sectionName'];
                    }
            
                    
                    $data = array();
                    
                    $person = new Person();
                    $student=new Student();
                    $admission = new Admission();
                    $acHistory = new AcademicHistory();
                    $jobExp= new JobExperiance();
                    
      
                    if($data = DBhelper::getStudentId(yii::app()->session['secName'], yii::app()->session['batName'],yii::app()->session['proCode']))
                    {
                        
                        $student->studentID = $data['studentID'];
                        $student->stu_academicTerm = $data['bat_term'];
                        $student->stu_academicYear = $data['bat_year'];
                        $student->programmeCode= $data['programmeCode'];
                        $admission->studentID = $data['studentID'];
                        $admission->sectionName = $data['sectionName'];
                        $admission->batchName = $data['batchName'];
                        $admission->programmeCode = $data['programmeCode'];
                        //echo $student->studentID;
                        
                     
                    }
                    
		 //Uncomment the following line if AJAX validation is needed
                    


		if(isset($_POST['Person']) && isset($_POST['Admission']) && isset($_POST['Student']))
		{
                    $flag = TRUE;
                    CActiveForm::validate($person);
                    CActiveForm::validate($admission);
                    CActiveForm::validate($student);
                    
                    
                    $person->attributes = $_POST['Person'];       
                    $admission->attributes = $_POST['Admission'];
                    $student->attributes = $_POST['Student'];
                    
                    
                    $acHistory->ach_degree= $_POST['ach_degree'];
                    $acHistory->ach_group= $_POST['ach_group'];
                    $acHistory->ach_board= $_POST['ach_board'];
                    $acHistory->ach_institution= $_POST['ach_institution'];
                    $acHistory->ach_passingYear= $_POST['ach_passingYear'];
                    $acHistory->ach_result= $_POST['ach_result'];
                    
                    $jobExp->joe_employer= $_POST['joe_employer'];
                    $jobExp->joe_address= $_POST['joe_address'];
                    $jobExp->joe_contact= $_POST['joe_contact'];
                    $jobExp->joe_position= $_POST['joe_position'];
                    $jobExp->joe_startDate= $_POST['joe_startDate'];
                    $jobExp->joe_endDate= $_POST['joe_endDate'];
                    
                    
                    
                        if($person->validate() && $student->validate() && $admission->validate()  )
                        {   
                            
                           // echo "Bismillah Hir Rah Manir Rahim";
                    
                                

                            
                                if($person->save())
                                {	
                                    
                                $student->personID= $person->personID;
                                        
                                    $i=0; $achFlag=false;
                                    foreach($acHistory->ach_degree as $item)
                                    {
                                        
                                            if ($item) 
                                            {   $achFlag= true;
                                                if($i==0){
                                                    $sql = "INSERT INTO tbl_academichistory (`ach_degree`, `ach_group`, `ach_institution`, `ach_board`, `ach_passingYear`, `ach_result`, `personID`) VALUES"; 
                                                }
                                                else $coma=",";


                                                $sql .=$coma."  ( '{$item}', '{$acHistory->ach_group[$i]}', '{$acHistory->ach_institution[$i]}', '{$acHistory->ach_board[$i]}', '{$acHistory->ach_passingYear[$i]}', '{$acHistory->ach_result[$i]}', '{$person->personID}')"; 
                                            }
                                        
                                        
                               
                                        $i++;
                                    }
                                    
                                     $i=0; $joeFlag=false;
                                    foreach($jobExp->joe_employer as $item)
                                    {
                                        
                                            if ($item) 
                                            {   $joeFlag= true;
                                                if($i==0){
                                                    $sql2 = "INSERT INTO `tbl_jobexperiance` (`jobExperianceID`, `joe_employer`, `joe_address`, `joe_position`, `joe_startDate`, `joe_endDate`, `joe_contact`, `personID`) VALUES"; 
                                                }
                                                else $coma=",";


                                                $sql2 .=$coma."  ( '{$item}', '{$jobExp->joe_employer[$i]}', '{$jobExp->joe_address[$i]}', '{$jobExp->joe_contact[$i]}', '{$jobExp->joe_position[$i]}', '{$jobExp->joe_startDate[$i]}', '{$jobExp->joe_endDate[$i]}', '{$person->personID}')"; 
                                            }
                                        
                                        
                               
                                        $i++;
                                    }
                               

                                   
                                    if($student->save() && $admission->save())
                                    {
                                        if($achFlag)Yii::app()->db->createCommand($sql)->execute();
                                        if($joeFlag)Yii::app()->db->createCommand($sql2)->execute();
                                        $this->redirect(array('getAdmission'));
                                    }

                                }
                            
                            
                            
                        }
		}
                
                        if(!$flag)
                        {
                        $this->renderPartial('create',array(
                            'admission'=>$admission,'student'=>$student,'person'=>$person,'acHistory'=>$acHistory,'jobExp'=>$jobExp, 'form'=>'_form_2'
                        ),false,false);
                        }
                        else {
                  
                                  $this->render('create',array(
                            'admission'=>$admission,'student'=>$student,'person'=>$person,'acHistory'=>$acHistory,'jobExp'=>$jobExp, 'form'=>'_form_2'
                        ),false,false);
                            
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
            
                yii::app()->session['batName']=$_POST['batchName'];
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
            
	//	if(isset($_POST['ajax']) && $_POST['ajax']==='admission-form')
	//	{
                   // echo "Bismillah Hir Rahmanur Rahim";
			echo CActiveForm::validate($model);
			Yii::app()->end();
	//	}
	}
}
