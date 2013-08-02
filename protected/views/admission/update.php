<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Admin'=>array('index'),
	$admission->studentID =>array('view','id'=>$admission->studentID),
	'Update',
);

$this->menu=array(
	array('label'=>'Student Info', 'url'=>array('admin')),
	array('label'=>'Edit Student Info', 'active'=>true),
	
);
?>

<h1>Edit Student Info </h1>
<div class="title">
            <h4><strong>Programme:</strong> <?php  echo DBhelper::getProgrammeByCode($admission->programmeCode); ?></h4>
            <h3><strong>Batch:</strong> <?php echo $admission->batchName.FormUtil::getBatchNameSufix($admission->batchName); ?>  <strong>Section:</strong> <?php echo $admission->sectionName; ?></h3>
            <h4><strong>Academic Year:</strong> <?php  echo FormUtil::getTerm($student->stu_academicTerm)." ".$student->stu_academicYear;  ?></h4>
            <h3><strong>Student ID:</strong> <?php echo $student->studentID;  ?></h3>
        
        </div>
        <hr/>

<?php echo $this->renderPartial('_update', array('admission'=>$admission,'student'=>$student,'person'=>$person)); ?>