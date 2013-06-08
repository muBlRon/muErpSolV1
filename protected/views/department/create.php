<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
        'school'=>array('school/index'),
	'Departments'=>array('index','id'=>$model->schoolID),
	'Create',
);

$this->menu=array(
	array('label'=>'List Department', 'url'=>array('index','id'=>$model->schoolID)),
	
);
?>

<h1>Create Department</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,)); ?>