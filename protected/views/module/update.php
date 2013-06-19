<?php
/* @var $this ModuleController */
/* @var $model Module */

$this->breadcrumbs=array(
   'registry'=>array('site/registry'),
	'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus'=>array('Syllabus/index','id'=>Yii::app()->session['programmeCode']),
	'Modules'=>array('index','id'=>Yii::app()->session['syllabusCode']),
	'Update',
);

$this->menu=array(
	array('label'=>'List Module', 'url'=>array('index','id'=>Yii::app()->session['syllabusCode'])),
	
	array('label'=>'View Module', 'url'=>array('view', 'id'=>$model->moduleCode)),
	
);
?>

<h1>Update Module <?php echo $model->moduleCode; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>