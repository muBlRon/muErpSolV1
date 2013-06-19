<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */

$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
	    'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
	'Syllabus'=>array('index','id'=>Yii::app()->session['programmeCode']),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Syllabus', 'url'=>array('index','id'=>Yii::app()->session['programmeCode'])),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#syllabus-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Syllabuses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'syllabus-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'syllabusCode',
		'programmeCode',
		'syl_version',
		'syl_startTerm',
		'syl_startYear',
		'syl_endTerm',
		/*
		'syl_endYear',
		'syl_maxCreditHour',
		'syl_description',
		'syl_minGPA',
		'syl_maxGPA',
		'syl_approvedDate',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
