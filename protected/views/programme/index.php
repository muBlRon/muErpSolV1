<?php
/* @var $this ProgrammeController */
/* @var $dataProvider CActiveDataProvider */


$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
	'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=>Yii::app()->session['schoolID']),
	'Programme',
);

$this->menu=array(
       
	array('label'=>'Create Programme', 'url'=>array('create')),
	array('label'=>'Manage Programme', 'url'=>array('admin')),
     array('label'=>'Back to Department', 'url'=>array('Department/index', 'id'=>Yii::app()->session['schoolID'])),
);
?>

<h1>Programmes</h1>
<h5>[ <?php echo yii::app()->session['departmentName']; ?> ]</h5>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
