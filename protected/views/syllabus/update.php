<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */

$this->breadcrumbs=array(
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus'=>array('index','id'=>Yii::app()->session['programmeCode']),
	
	$model->syllabusCode=>array('view','id'=>$model->syllabusCode),
	'Update',
);

$this->menu=array(
	array('label'=>'List Syllabus', 'url'=>array('index','id'=>Yii::app()->session['programmeCode'])),
	
	array('label'=>'View Syllabus', 'url'=>array('view', 'id'=>$model->syllabusCode)),
	
);
?>

<h1>Update Syllabus <?php echo $model->syllabusCode; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>