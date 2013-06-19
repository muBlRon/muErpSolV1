<?php
/* @var $this DepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
	'School'=>array('school/index'),
	'Department',
	
);

$this->menu=array(
   
	array('label'=>'Create Department', 'url'=>array('create',)),
        
	array('label'=>'Manage Department', 'url'=>array('admin',)),
         array('label'=>'Back to School', 'url'=>array('School/index', 'id'=>Yii::app()->session['schoolID'])),
);
?>
<h1>Departments</h1>
<h5>[ <?php echo  yii::app()->session['schoolName']; ?> ]</h5>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
