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
				'actions'=>array('index','test','view','renderButtons','update'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('getBatch','create','StudentAdministration','getAdmission'),
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

        public function actionStudentAdministration()
	{
		$this->render('StudentAdministration');
	}
        
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
                $student=Student::model()->findByPk($id);
            echo $student->personID;
		$this->render('view',array(
			'admission'=>  Admission::model()->findByPk(array('studentID'=>$id,'sectionName'=>yii::app()->session['secName'],'batchName'=>yii::app()->session['batName'],'programmeCode'=>yii::app()->session['proCode'])),
                        'student'=> $student,
                        'person'=> Person::model()->findByPk($student->personID)
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
            if($_REQUEST['flag'])
            {
                yii::app()->session['stuCreate']=true;
            }
            
            if(!yii::app()->session['stuCreate'])
            {
                $this->redirect(array('admin'));
            }
                
                $form ="_form_2";
                   /* if(isset($_REQUEST['sectionName']))
                    {
                        
                        
                        
                        yii::app()->session['batName']=substr($_REQUEST['sectionName'], '-',-2);
                        yii::app()->session['secName']=substr($_REQUEST['sectionName'], -1);
                    }
            */
                    
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
                    


		if(isset($_REQUEST['Person']) && isset($_REQUEST['Admission']) && isset($_REQUEST['Student']))
		{
                    
                        
                    CActiveForm::validate($person);
                    CActiveForm::validate($admission);
                    CActiveForm::validate($student);
                    CActiveForm::validate($acHistory);
                    
                    
                    $person->attributes = $_REQUEST['Person'];       
                    $admission->attributes = $_REQUEST['Admission'];
                    $student->attributes = $_REQUEST['Student'];
                    
                    
                    $acHistory->ach_degree= $_REQUEST['ach_degree'];
                    $acHistory->ach_group= $_REQUEST['ach_group'];
                    $acHistory->ach_board= $_REQUEST['ach_board'];
                    $acHistory->ach_institution= $_REQUEST['ach_institution'];
                    $acHistory->ach_passingYear= $_REQUEST['ach_passingYear'];
                    $acHistory->ach_result= $_REQUEST['ach_result'];
                    
                    $jobExp->joe_employer= $_REQUEST['joe_employer'];
                    $jobExp->joe_address= $_REQUEST['joe_address'];
                    $jobExp->joe_contact= $_REQUEST['joe_contact'];
                    $jobExp->joe_position= $_REQUEST['joe_position'];
                    $jobExp->joe_startDate= $_REQUEST['joe_startDate'];
                    $jobExp->joe_endDate= $_REQUEST['joe_endDate'];
                    
                    
                    
                        if($person->validate() && $student->validate() && $admission->validate()  )
                        {   
                            
                            //echo "Bismillah Hir Rah Manir Rahim";
                            //echo "pre:".$_REQUEST['preview'];
                            //echo "isset".isset($_REQUEST['preview']);
                               if(isset($_REQUEST['preview']) && $_REQUEST['preview']==1)
                               {
                                   $form="_form_3";
                                           
                               }
                               elseif(isset($_REQUEST['preview']) && $_REQUEST['preview']==2 && yii::app()->session['stuCreate'])
                               { //echo "saved:".$_REQUEST['preview'];
                            
                                   if($person->save())
                                    {	

                                    $student->personID= $person->personID;

                                        $i=0; $achFlag=false;$coma='';
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

                                        //echo $sql;
                                         $j=0; $joeFlag=false;$coma='';
                                        foreach($jobExp->joe_employer as $item)
                                        {

                                                if ($item) 
                                                {   $joeFlag= true;
                                                    if($j==0){
                                                        $sql2 = "INSERT INTO `tbl_jobexperiance` (`jobExperianceID`, `joe_employer`, `joe_address`, `joe_position`, `joe_startDate`, `joe_endDate`, `joe_contact`, `personID`) VALUES"; 
                                                    }
                                                    else $coma=",";


                                                    $sql2 .=$coma."  ( '{$item}', '{$jobExp->joe_employer[$j]}', '{$jobExp->joe_address[$j]}', '{$jobExp->joe_contact[$j]}', '{$jobExp->joe_position[$j]}', '{$jobExp->joe_startDate[$j]}', '{$jobExp->joe_endDate[$j]}', '{$person->personID}')"; 
                                                }



                                            $j++;
                                        }

                                        

                                        //echo $sql2;
                                        if($student->save() && $admission->save())
                                        {
                                            if($achFlag)Yii::app()->db->createCommand($sql)->execute();
                                            if($joeFlag)Yii::app()->db->createCommand($sql2)->execute();
                                            yii::app()->session['stuCreate']=false;
                                            $this->redirect(array('admin'));
                                        }

                                    }
                              }
                            
         
                              
                            
                        }
		}
                
                    
                                  $this->render('create',array(
                            'admission'=>$admission,'student'=>$student,'person'=>$person,'acHistory'=>$acHistory,'jobExp'=>$jobExp, 'form'=>$form
                        ));
                            
                   
                    
                
		
	}
/*
        public function actionGetBatch()
        {
            
            
		if(isset($_REQUEST['programmeCode']))
		{
			
                        
			//echo "programme code:".$_REQUEST['programmeCode'];
		
                    yii::app()->session['proCode']=$_REQUEST['programmeCode'];

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
        
  */      
        public function actionGetBatch()
        {
            
            //echo "test";
		if(isset($_REQUEST['programmeCode']))
		{
			
                        
			//echo "programme code:".$_REQUEST['programmeCode'];
		
                    yii::app()->session['proCode']=$_REQUEST['programmeCode'];

                    $model =  Batch::model()->findAllByAttributes(array('programmeCode'=>$_REQUEST['programmeCode']));
                    
                    if(!$model)
                    {
                        echo CHtml::tag('span',array('style'=>'color:red;'),CHtml::encode("-- no batch found--"),true);
                        
                    }
                    else    
                    {
                           
                           
                           

                           $data =array();
                           $i=0;
                           foreach ($model as $bat)
                           {
                                    $section = Section::model()->findAllByAttributes(array('programmeCode'=>$bat->programmeCode,'batchName'=>$bat->batchName));

                                    
                                    foreach ($section as $sec) {


                                     $data[$i]= array('sec'=>$sec->batchName.'-'.$sec->sectionName,'sectionName'=>'section '.$bat->batchName.FormUtil::getBatchNameSufix($sec->batchName).' '.$sec->sectionName,'group'=> '----- '.$bat->batchName.FormUtil::getBatchNameSufix($sec->batchName).' Batch -----' );   
                                    

                                     $i++;
                                    }

                           }


                           $this->renderPartial('_form_1_1',array('data'=>$data),false,true);

                    }
                }
        }
        /*
        public function actionGetSection()
        {
            
                yii::app()->session['batName']=$_REQUEST['batchName'];
		if(isset($_REQUEST['batchName']))
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
*/
        /**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            
                $admission=  Admission::model()->findByPk(array('studentID'=>$id,'sectionName'=>yii::app()->session['secName'],'batchName'=>yii::app()->session['batName'],'programmeCode'=>yii::app()->session['proCode']));
		$student= Student::model()->findByPk($id);
                $person= Person::model()->findByPk($student->personID);
                //echo $person->per_mobile;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_REQUEST['Admission'],$_REQUEST['Student'],$_REQUEST['Person']))
		{
                    
                    CActiveForm::validate($person);
                    CActiveForm::validate($admission);
                    CActiveForm::validate($student);
                    
			$admission->attributes=$_REQUEST['Admission'];
                        $student->attributes=$_REQUEST['Student'];
                        $person->attributes=$_REQUEST['Person'];
 
                        if($person->validate() && $student->validate() && $admission->validate()  )
                        {
                            if($admission->save() && $student->save() && $person->save())
                            {	//$this->redirect(array('view','id'=>$model->studentID));
                                $this->redirect(array('admin'));
                            }
     
                        }
		}

		$this->render('update',array(
			'admission'=>$admission,'student'=>$student,'person'=>$person
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
			$this->redirect(isset($_REQUEST['returnUrl']) ? $_REQUEST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            
            if(isset($_REQUEST['sectionName']))
            {
                yii::app()->session['batName']=substr($_REQUEST['sectionName'], '-',-2);
                yii::app()->session['secName']=substr($_REQUEST['sectionName'], -1);
            }
            
                    $proCode=yii::app()->session['proCode'];
                    $batName=yii::app()->session['batName'];
                    $secName=yii::app()->session['secName'];
                    
                    $condition = "sectionName='{$secName}' and batchName='{$batName}' and programmeCode='{$proCode}'";
                
		$dataProvider=new CActiveDataProvider('Admission', array(
                'criteria'=>array('condition'=>$condition),
                'pagination'=>array('pageSize'=>25,)
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
		$model=new Admission('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Admission']))
			$model->attributes=$_GET['Admission'];

            if(isset($_REQUEST['sectionName']))
            {
                yii::app()->session['batName']=substr($_REQUEST['sectionName'], '-',-2);
                yii::app()->session['secName']=substr($_REQUEST['sectionName'], -1);
            }
             
                
		$this->render('admin',array(
			'model'=>$model,
		));
	}

        
        
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id )
	{
		$admission=  Admission::model()->findByPk($id);
		if($admission===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $admission;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
            
	//	if(isset($_REQUEST['ajax']) && $_REQUEST['ajax']==='admission-form')
	//	{
                   // echo "Bismillah Hir Rahmanur Rahim";
			echo CActiveForm::validate($model);
			Yii::app()->end();
	//	}
	}
}
