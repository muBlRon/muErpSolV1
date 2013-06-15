<?php
/* @var $this PersonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
        'Administration'=>array('administration/index'),
	'Human Resource',
);

$this->menu=array(
	//array('label'=>'Create Person', 'url'=>array('create')),
	//array('label'=>'Manage Person', 'url'=>array('admin')),
    	array('label'=>'Employee Managemnt', 'url'=>array('employee/index')),
	array('label'=>'Faculty Managemnt', 'url'=>array('faculty/index')),
    
);
?>

<h1>Human Resource Department</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
