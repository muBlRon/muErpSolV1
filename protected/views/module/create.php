<?php
/* @var $this ModuleController */
/* @var $model Module */

$this->breadcrumbs=array(
        'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus'=>array('Syllabus/index','id'=>Yii::app()->session['programmeCode']),
	'Modules'=>array('index','id'=>Yii::app()->session['syllabusCode']),
	'Create',
);

$this->menu=array(
	array('label'=>'List Module', 'url'=>array('index','id'=>Yii::app()->session['syllabusCode'])),
	
);
?>

<h1>Create Module</h1>
<h5>[ <?php echo yii::app()->session['programmeName']; ?> ]</h5>
<h5>[ <?php echo yii::app()->session['syllabusCode']; ?> ]</h5>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>