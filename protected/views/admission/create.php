<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Admission'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Admission', 'url'=>array('index')),
	array('label'=>'Manage Admission', 'url'=>array('admin')),
);
?>

<h1>Take Admission</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>