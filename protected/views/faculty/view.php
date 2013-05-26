<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	$model->facultyID,
);

$this->menu=array(
	array('label'=>'List Faculty', 'url'=>array('index')),
	
	array('label'=>'Update Faculty', 'url'=>array('update', 'id'=>$model->facultyID)),
	array('label'=>'Delete Faculty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->facultyID),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View Faculty #<?php echo $model->facultyID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'facultyID',
		'fac_designation',
		'fac_position',
		'fac_joining',
		'fac_leave',
		'fac_loginName',
		'fac_password',
		'fac_accessLevel',
		'departmentID',
	),
)); ?>
