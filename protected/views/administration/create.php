<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
    'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
	'Administrative Departments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Departments', 'url'=>array('index')),
	
);
?>

<h1>Create Administration</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>