<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */

$this->breadcrumbs=array(
   'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus'=>array('index','id'=>Yii::app()->session['programmeCode']),
	$model->syllabusCode,
);

$this->menu=array(
	array('label'=>'List Syllabus', 'url'=>array('index','id'=>Yii::app()->session['programmeCode'])),
	
	array('label'=>'Update Syllabus', 'url'=>array('update', 'id'=>$model->syllabusCode)),
	array('label'=>'Delete Syllabus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->syllabusCode),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View Syllabus #<?php echo $model->syllabusCode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'syllabusCode',
		'programmeCode',
		'syl_version',
		'syl_startTerm',
		'syl_startYear',
		'syl_endTerm',
		'syl_endYear',
		'syl_maxCreditHour',
		'syl_description',
		'syl_minCGPA',
		'syl_maxCGPA',
		'syl_approvedDate',
	),
)); ?>
