<?php
/* @var $this AdministrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Administrations',
);

$this->menu=array(
	array('label'=>'Create Administration', 'url'=>array('create')),
	array('label'=>'Manage Administration', 'url'=>array('admin')),
        array('label'=>'Human Resource Dpartment', 'url'=>array('person/index')),
        array('label'=>'School', 'url'=>array('school/index')),
        
);
?>

<h1>Administration</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
