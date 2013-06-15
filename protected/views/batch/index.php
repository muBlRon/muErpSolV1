<?php
/* @var $this SyllabusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Batches',
);

$this->menu=array(
	array('label'=>'Create Batches', 'url'=>array('create')),
	array('label'=>'Manage Batches', 'url'=>array('admin')),
    array('label'=>'test', 'url'=>array('test')),
);
?>

<h1>Batch</h1>
<h5>[ <?php echo yii::app()->session['programmeName']; ?> ]</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
