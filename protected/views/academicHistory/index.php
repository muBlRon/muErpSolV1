<?php
/* @var $this AcademicHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Academic Histories',
);

$this->menu=array(
	array('label'=>'Create AcademicHistory', 'url'=>array('create')),
	array('label'=>'Manage AcademicHistory', 'url'=>array('admin')),
);
?>

<h1>Academic Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
