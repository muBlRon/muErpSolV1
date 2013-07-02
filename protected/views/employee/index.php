<?php
/* @var $this EmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
    'HRM'=>array('site/HRM'),
    'Administrative Departments'=>array('administration/list'),
	'Employees',
);

$this->menu=array(
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>Employees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
