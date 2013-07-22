<?php
/* @var $this AcademicHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    	'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
    'HRM'=>array('site/HRM'),
    'Academic Departments'=>array('department/list'),
    'Faculty'=>array('faculty/index','id'=>yii::app()->session['departmentId']),
	'Academic Histories',
);

$this->menu=array(
	array('label'=>'Create AcademicHistory', 'url'=>array('create')),
	array('label'=>'Manage AcademicHistory', 'url'=>array('admin')),
        array('label'=>'Excel', 'url'=>array('excel')),
);
?>

<h1>Academic Histories</h1>
<h5><?php    echo DBhelper::getFullNameByPersonID(yii::app()->session['personId']) ;?></h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
