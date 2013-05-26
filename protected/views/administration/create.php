<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Administrations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Administration', 'url'=>array('index')),
	array('label'=>'Manage Administration', 'url'=>array('admin')),
);
?>

<h1>Create Administration</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>