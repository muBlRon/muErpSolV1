<?php
/* @var $this SchoolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schools',
);

$this->menu=array(
	array('label'=>'Create School', 'url'=>array('create')),
	array('label'=>'Manage School', 'url'=>array('admin')),
        array('label'=>'Manage Department', 'url'=>array('department/index')),
        array('label'=>'Manage Program', 'url'=>array('program/index')),
        array('label'=>'Manage Syllabus', 'url'=>array('syllabus/index')),
            
);
?>

<h1>Schools</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
