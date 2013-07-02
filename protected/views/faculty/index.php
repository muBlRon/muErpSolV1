<?php
/* @var $this FacultyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	 'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
    'HRM'=>array('site/HRM'),
    'Academic Departments'=>array('department/list'),
	'Faculties',
);

$this->menu=array(
	array('label'=>'Create Faculty', 'url'=>array('create')),
	array('label'=>'Manage Faculty', 'url'=>array('admin')),
);
?>

<h1>Faculties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
