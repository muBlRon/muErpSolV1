<?php
/* @var $this AcademicHistoryController */
/* @var $model AcademicHistory */

$this->breadcrumbs=array(
	'Academic Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AcademicHistory', 'url'=>array('index')),
	array('label'=>'Manage AcademicHistory', 'url'=>array('admin')),
);
?>

<h1>Create AcademicHistory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>