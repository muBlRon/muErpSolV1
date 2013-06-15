<?php
/* @var $this JobExperianceController */
/* @var $model JobExperiance */

$this->breadcrumbs=array(
	'Job Experiances'=>array('index'),
	$model->jobExperianceID,
);

$this->menu=array(
	array('label'=>'List JobExperiance', 'url'=>array('index')),
	array('label'=>'Create JobExperiance', 'url'=>array('create')),
	array('label'=>'Update JobExperiance', 'url'=>array('update', 'id'=>$model->jobExperianceID)),
	array('label'=>'Delete JobExperiance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jobExperianceID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobExperiance', 'url'=>array('admin')),
);
?>

<h1>View JobExperiance #<?php echo $model->jobExperianceID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jobExperianceID',
		'joe_employer',
		'joe_address',
		'joe_position',
		'joe_startDate',
		'joe_endDate',
		'joe_contact',
		'personID',
	),
)); ?>
