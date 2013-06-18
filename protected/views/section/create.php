<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */

$this->breadcrumbs=array(
	'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	
     'Batch'=>array('Batch/index', 'id'=>Yii::app()->session['programmeCode']),
    'Sections'=>array('index','id'=>Yii::app()->session['batchName']),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sections', 'url'=>array('index','id'=>Yii::app()->session['batchName'])),
	
);


?>



  

  <h1>Create Section</h1>
  
  <h5>[Batch:  <?php echo $model->batchName.FormUtil::getBatchNameSufix($model->batchName); ?> ]</h5>
<h5>[Programme: <?php echo yii::app()->session['programmeName']; ?> ]</h5>
<h5>[Academic Year: <?php echo DBhelper::getAcademicYearByBatch($model->batchName, yii::app()->session['programmeCode']) ?> ]</h5>
  
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

