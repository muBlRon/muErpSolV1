<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'school'=>array('school/index'),
	'Departments'=>array('index','id'=>$model->schoolID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Department', 'url'=>array('index','id'=>$model->schoolID)),
	
	array('label'=>'View Department', 'url'=>array('view', 'id'=>$model->departmentID)),
	
);
?>

<h1>Update Department <?php echo $model->departmentID; ?></h1>

<?php echo $this->renderPartial('_update', array('model'=>$model)); ?>