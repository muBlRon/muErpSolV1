<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */

$this->breadcrumbs=array(
	'Syllabuses'=>array('index'),
	$model->syllabusID=>array('view','id'=>$model->syllabusID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Syllabus', 'url'=>array('index')),
	array('label'=>'Create Syllabus', 'url'=>array('create')),
	array('label'=>'View Syllabus', 'url'=>array('view', 'id'=>$model->syllabusID)),
	array('label'=>'Manage Syllabus', 'url'=>array('admin')),
);
?>

<h1>Update Syllabus <?php echo $model->syllabusID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>