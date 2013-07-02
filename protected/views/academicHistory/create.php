<?php
/* @var $this AcademicHistoryController */
/* @var $model AcademicHistory */

$this->breadcrumbs=array(
    'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
    'HRM'=>array('site/HRM'),
    'Academic Departments'=>array('department/list'),
    'Faculty'=>array('faculty/index','id'=>yii::app()->session['departmentId']),
	'Academic Histories'=>array('index','id'=>yii::app()->session['personId']),
	'Create',
);

$this->menu=array(
	array('label'=>'List AcademicHistory', 'url'=>array('index','id'=>yii::app()->session['personId'])),
	array('label'=>'Manage AcademicHistory', 'url'=>array('admin')),
);
?>

<h1>Create Academic History</h1>
<h5><?php    echo DBhelper::getFullNameByPersonID(yii::app()->session['personId']) ;?></h5>

<?php echo $this->renderPartial('_form_1', array('model'=>$model)); ?>