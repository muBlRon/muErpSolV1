<?php
/* @var $this JobExperianceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Experiances',
);

$this->menu=array(
	array('label'=>'Create JobExperiance', 'url'=>array('create')),
	array('label'=>'Manage JobExperiance', 'url'=>array('admin')),
);
?>

<h1>Job Experiances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
