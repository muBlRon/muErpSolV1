<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
    'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
    'HRM'=>array('site/HRM'),
    'Administrative Departments'=>array('administration/list'),
	'Employee'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>Create Employee</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model, 'persons'=>$persons,'acHistory'=>$acHistory,)); ?>