<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->employeeID=>array('view','id'=>$model->employeeID),
	'Update',
);

$this->menu=array(
	array('label'=>'Update Employee Record', 'url'=>array('person/update', 'id'=>$model->employeeID)),
	array('label'=>'Update Academic Record', 'url'=>array('academicHistory/update', 'id'=>$model->employeeID)),
	array('label'=>'Update Job Experiance', 'url'=>array('jobExperiance/update', 'id'=>$model->employeeID)),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>Update Employee <?php echo $model->employeeID; ?></h1>
<?php echo $this->renderPartial('_update', array('model'=>$model,'persons'=>$persons)); ?>
