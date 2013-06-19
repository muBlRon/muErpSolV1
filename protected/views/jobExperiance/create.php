<?php
/* @var $this JobExperianceController */
/* @var $model JobExperiance */

$this->breadcrumbs=array(
	'Job Experiances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobExperiance', 'url'=>array('index')),
	array('label'=>'Manage JobExperiance', 'url'=>array('admin')),
);
?>

<h1>Create JobExperiance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>