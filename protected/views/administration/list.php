<?php
/* @var $this AdministrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
    'HRM'=>array('site/HRM'),
	'Administrative Departments',
);

?>

<h1>Administrative Departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_list',
)); ?>
