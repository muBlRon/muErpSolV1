<?php
/* @var $this ModuleController */
/* @var $model Module */

$this->breadcrumbs=array(
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus'=>array('Syllabus/index','id'=>Yii::app()->session['programmeCode']),
	'Modules'=>array('index','id'=>Yii::app()->session['syllabusCode']),
	$model->moduleCode,
);

$this->menu=array(
	array('label'=>'List Module', 'url'=>array('index','id'=>Yii::app()->session['syllabusCode'])),
	
	array('label'=>'Update Module', 'url'=>array('update', 'id'=>$model->moduleCode)),
	array('label'=>'Delete Module', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->moduleCode),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View Module #<?php echo $model->moduleCode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'moduleCode',
		'syllabusCode',
		'mod_name',
		'mod_shortName',
		'mod_creditHour',
		'mod_type',
		'mod_labIncluded',
		'mod_mejor',
		'mod_group',
		'mod_sequence',
	),
)); ?>
