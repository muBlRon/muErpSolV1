<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
	'Programme'=>array('index'),
	$model->programmeCode,
);

$this->menu=array(
	array('label'=>'List Programme', 'url'=>array('index')),
	
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
		'pro_totalTerms',
		'pro_remarks',
		'pro_type',
		'pro_medium',
		'departmentID',
	),
)); ?>
