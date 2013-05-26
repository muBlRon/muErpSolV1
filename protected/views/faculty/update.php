<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	$model->facultyID=>array('view','id'=>$model->facultyID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Faculty', 'url'=>array('index')),
	array('label'=>'Create Faculty', 'url'=>array('create')),
	array('label'=>'View Faculty', 'url'=>array('view', 'id'=>$model->facultyID)),
	array('label'=>'Manage Faculty', 'url'=>array('admin')),
);
?>

<h1>Update Faculty <?php echo $model->facultyID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>