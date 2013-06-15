<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */

$this->breadcrumbs=array(
	'registry'=>array('site/registry'),
    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Batch'=>array('index','id'=>Yii::app()->session['programmeCode']),
	'Create',
);

$this->menu=array(
	array('label'=>'List Batches', 'url'=>array('index','id'=>Yii::app()->session['programmeCode'])),
	
);


?>


<div id="dataToUpdate">
  

  <h1>Create Batches</h1>
    <?php echo $this->renderPartial('test', array('model'=>$model)); ?>

</div>