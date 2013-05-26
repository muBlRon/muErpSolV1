<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */

$this->breadcrumbs=array(
	'Syllabuses'=>array('index'),
	$model->syllabusID,
);

$this->menu=array(
	array('label'=>'List Syllabus', 'url'=>array('index')),
	array('label'=>'Create Syllabus', 'url'=>array('create')),
	array('label'=>'Update Syllabus', 'url'=>array('update', 'id'=>$model->syllabusID)),
	array('label'=>'Delete Syllabus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->syllabusID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Syllabus', 'url'=>array('admin')),
);
?>

<h1>View Syllabus #<?php echo $model->syllabusID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'syllabusID',
		'programmeCode',
		'syl_version',
		'syl_startTerm',
		'syl_startYear',
		'syl_endTerm',
		'syl_endYear',
		'syl_maxCreditHour',
		'syl_description',
		'syl_minGPA',
		'syl_maxGPA',
		'syl_approvedDate',
	),
)); ?>
