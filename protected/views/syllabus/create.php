<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */

$this->breadcrumbs=array(
   'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus'=>array('index','id'=>Yii::app()->session['programmeCode']),
	'Create',
);

$this->menu=array(
	array('label'=>'List Syllabus', 'url'=>array('index','id'=>Yii::app()->session['programmeCode'])),
	
);
?>

<h1>Create Syllabus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>