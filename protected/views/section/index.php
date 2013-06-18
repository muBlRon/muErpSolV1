<?php
/* @var $this SyllabusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
    'Batch'=>array('Batch/index', 'id'=>Yii::app()->session['programmeCode']),
	'Sections',
	
);

$this->menu=array(
        array('label'=>'goto Batch List', 'url'=>array('Batch/index', 'id'=>Yii::app()->session['programmeCode']),),
	array('label'=>'Create Section', 'url'=>array('create')),
	array('label'=>'Manage Section', 'url'=>array('admin')),
    
);
?>

<h1>Sections</h1>
<h5>[Batch:  <?php echo yii::app()->session['batchName'].FormUtil::getBatchNameSufix(yii::app()->session['batchName']); ?> ]</h5>
<h5>[Programme: <?php echo yii::app()->session['programmeName']; ?> ]</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
