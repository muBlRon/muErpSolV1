<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Batch'=>array('index','id'=>Yii::app()->session['programmeCode']),
'Section'=>array('index','id'=>Yii::app()->session['batchName']),	
    $model->sectionName,
);

$this->menu=array(
	array('label'=>'List Sections', 'url'=>array('index','id'=>$model->batchName)),
	
	array('label'=>'Update Section', 'url'=>array('update', 'id'=>$model->sectionName),),
	array('label'=>'Delete Section', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->batchName),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View Section: <?php echo $model->sectionName."  # ".$model->batchName.FormUtil::getBatchNameSufix($model->batchName)."  # ".$model->programmeCode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                'sectionName',
		'batchName',
		'programmeCode',
                'sec_startDate',
		'sec_startId',
		'sec_endId'
	),
)); ?>
