<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>$model->departmentID),
	$model->programmeCode,
);

$this->menu=array(
	array('label'=>'List Programme', 'url'=>array('index', 'id'=>$model->departmentID)),
	
	array('label'=>'Update Programme', 'url'=>array('update', 'id'=>$model->programmeCode)),
	array('label'=>'Delete Programme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->programmeCode),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View Programme #<?php echo $model->programmeCode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'programmeCode',
		'pro_name',
                'pro_shortName',
		'pro_totalTerms',
		'pro_startTerm',
                'pro_startYear',
		'pro_type',
		'pro_medium',
		
                'pro_remarks',
	),
)); ?>
