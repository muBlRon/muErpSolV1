<?php
/* @var $this AcademicHistoryController */
/* @var $model AcademicHistory */

$this->breadcrumbs=array(
	'Academic Histories'=>array('index'),
	$model->academicHistoryID=>array('view','id'=>$model->academicHistoryID),
	'Update',
);

$this->menu=array(
	array('label'=>'List AcademicHistory', 'url'=>array('index')),
	array('label'=>'Create AcademicHistory', 'url'=>array('create')),
	array('label'=>'View AcademicHistory', 'url'=>array('view', 'id'=>$model->academicHistoryID)),
	array('label'=>'Manage AcademicHistory', 'url'=>array('admin')),
);
?>

<h1>Update AcademicHistory <?php echo $model->academicHistoryID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>