<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
   'registry'=>array('site/registry'),
	'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>$model->departmentID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Programme', 'url'=>array('index', 'id'=>$model->departmentID)),
	
	array('label'=>'View Programme', 'url'=>array('view', 'id'=>$model->programmeCode)),
	
);
?>

<h1>Update Programme <?php echo $model->programmeCode; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>