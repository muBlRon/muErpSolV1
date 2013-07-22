<?php
/* @var $this AdministrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
	'Administrative Departments',
);

$this->menu=array(
    
	array('label'=>'Create New Department', 'url'=>array('create')),
	array('label'=>'Manage Departments', 'url'=>array('admin')),
    array('label'=>'Back To Administration', 'url'=>array('site/administration')),    
        
);
?>

<h1>Administration</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
