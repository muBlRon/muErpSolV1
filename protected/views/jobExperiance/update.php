<?php
/* @var $this JobExperianceController */
/* @var $model JobExperiance */

$this->breadcrumbs=array(
	'Job Experiances'=>array('index'),
	$model->jobExperianceID=>array('view','id'=>$model->jobExperianceID),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobExperiance', 'url'=>array('index')),
	array('label'=>'Create JobExperiance', 'url'=>array('create')),
	array('label'=>'View JobExperiance', 'url'=>array('view', 'id'=>$model->jobExperianceID)),
	array('label'=>'Manage JobExperiance', 'url'=>array('admin')),
);
?>

<h1>Update JobExperiance <?php echo $model->jobExperianceID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>