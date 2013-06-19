<?php
/* @var $this SyllabusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus',
);

$this->menu=array(
	array('label'=>'Create Syllabus', 'url'=>array('create')),
	array('label'=>'Manage Syllabus', 'url'=>array('admin')),
      array('label'=>'Back to Programme', 'url'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID'])),
);
?>

<h1>Syllabus</h1>
<h5>[ <?php echo yii::app()->session['programmeName']; ?> ]</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
