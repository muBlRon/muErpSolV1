<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Batch'=>array('index','id'=>Yii::app()->session['programmeCode']),
	$model->batchName,
);

$this->menu=array(
	array('label'=>'List Batches', 'url'=>array('index','id'=>Yii::app()->session['programmeCode'])),
	
	/*array('label'=>'Update Batch', 'url'=>array('update', 'id'=>$model->batchName,'proCode'=>$model->programmeCode,)),
	array('label'=>'Delete Batch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->programmeCode),'confirm'=>'Are you sure you want to delete this item?')),*/
	
);
?>

<h1>View Batch #<?php echo $model->programmeCode." ".$model->batchName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'batchName',
		'programmeCode',
                'bat_term',
		'bat_year',
		'bat_advisor'
	),
)); ?>
