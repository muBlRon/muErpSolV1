<?php
/* @var $this AcademicHistoryController */
/* @var $model AcademicHistory */

$this->breadcrumbs=array(
	'Academic Histories'=>array('index'),
	$model->academicHistoryID,
);

$this->menu=array(
	array('label'=>'List AcademicHistory', 'url'=>array('index')),
	array('label'=>'Create AcademicHistory', 'url'=>array('create')),
	array('label'=>'Update AcademicHistory', 'url'=>array('update', 'id'=>$model->academicHistoryID)),
	array('label'=>'Delete AcademicHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->academicHistoryID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AcademicHistory', 'url'=>array('admin')),
);
?>

<h1>View Academic History #<?php echo $model->academicHistoryID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'academicHistoryID',
		'ach_degree',
		'ach_group',
		'ach_institution',
		'ach_board',
		'ach_passingYear',
		'ach_result',
		'ach_remarks',
		'personID',
	),
)); ?>
