<?php
/* @var $this DepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'School'=>array('school/index'),
	'Department',
	
);

$this->menu=array(
	array('label'=>'Create Department', 'url'=>array('create','id'=>$id)),
	array('label'=>'Manage Department', 'url'=>array('admin','id'=>$id)),
);
?>
<h1>Departments</h1>
<h5>[ <?php   echo $SchoolName;?> ]</h5>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
