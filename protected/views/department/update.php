<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->departmentID=>array('view','id'=>$model->departmentID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Department', 'url'=>array('index')),
	array('label'=>'Create Department', 'url'=>array('create')),
	array('label'=>'View Department', 'url'=>array('view', 'id'=>$model->departmentID)),
	array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>

<h1>Update Department <?php echo $model->departmentID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>