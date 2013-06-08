<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
	'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>$model->departmentID),
	'Create',
);

$this->menu=array(
	array('label'=>'List Programme', 'url'=>array('index','id'=>$model->departmentID)),
	
);
?>

<h1>Create Programme</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>