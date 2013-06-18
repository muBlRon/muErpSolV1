<?php
/* @var $this ModuleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
   'registry'=>array('site/registry'),
    	    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus'=>array('Syllabus/index','id'=>Yii::app()->session['programmeCode']),
	'Modules',
);

$this->menu=array(
	array('label'=>'Create Module', 'url'=>array('create')),
	array('label'=>'Manage Module', 'url'=>array('admin')),
    
        array('label'=>'Generate pdf', 'url'=>array('report','id'=>Yii::app()->session['syllabusCode'],)),
    array('label'=>'Back to Syllabus', 'url'=>array('Syllabus/index', 'id'=>Yii::app()->session['programmeCode'])),
);
?>

<h1>Modules</h1>
<h5>[ <?php echo yii::app()->session['programmeName']; ?> ]</h5>
<h5>[ <?php echo yii::app()->session['syllabusCode']; ?> ]</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
