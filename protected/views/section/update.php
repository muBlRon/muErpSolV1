<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
   'registry'=>array('site/registry'),
	'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
    
     'Batch'=>array('Batch/index', 'id'=>Yii::app()->session['programmeCode']),
    'Sections'=>array('index','id'=>Yii::app()->session['batchName']),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sections', 'url'=>array('index','id'=>$model->batchName)),
	
	array('label'=>'View Section', 'url'=>array('view', 'id'=>$model->sectionName)),
	
);
?>

<h1>Update Section <?php echo $model->sectionName."  # ".$model->batchName.FormUtil::getBatchNameSufix($model->batchName)."  # ".$model->programmeCode; ?></h1>
<h5>[Academic Year: <?php echo DBhelper::getAcademicYearByBatch($model->batchName, yii::app()->session['programmeCode']); ?> ]</h5>
<?php echo $this->renderPartial('_update', array('model'=>$model)); ?>