<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
    'HRM'=>array('site/HRM'),
    'Academic Departments'=>array('department/list'),
    'Faculty'=>array('index','id'=>yii::app()->session['departmentId']),
	'Create',
);

$this->menu=array(
	array('label'=>'List Faculty', 'url'=>array('index')),
	
);
?>

<h1>Create Faculty</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model, 'persons'=>$persons,'acHistory'=>$acHistory,)); ?>
