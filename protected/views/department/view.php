<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
        'School'=>array('school/index'),
	'Department'=>array('index','id'=>$model->schoolID),
	$model->dpt_code,
);

$this->menu=array(
	array('label'=>'List Department', 'url'=>array('index','id'=>$model->schoolID)),
	
	array('label'=>'Update Department', 'url'=>array('update', 'id'=>$model->departmentID)),
	array('label'=>'Delete Department', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->departmentID),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1><?php echo $model->dpt_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dpt_code',
		'dpt_name',
		'dpt_location',
		'dpt_contactNo',
		'dpt_email',
		'dpt_remarks',
		'dpt_head',
		'dpt_headStatus',
		'departmentID',
		'schoolID',
	),
)); ?>
