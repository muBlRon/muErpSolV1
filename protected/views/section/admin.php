<?php
/* @var $this ProgrammeController */
/* @var $model Programme */
//echo $model->departmentID;
$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
	'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index', 'id'=>Yii::app()->session['departmentID']),
    
     'Batch'=>array('Batch/index', 'id'=>Yii::app()->session['programmeCode']),
    'Sections'=>array('index','id'=>Yii::app()->session['batchName']),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Batch', 'url'=>array('index','id'=>Yii::app()->session['batchName'])),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.section-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#section-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sections</h1>
<h5>[Batch:  <?php echo yii::app()->session['batchName'].FormUtil::getBatchNameSufix(yii::app()->session['batchName']); ?> ]</h5>
<h5>[Programme: <?php echo yii::app()->session['programmeName']; ?> ]</h5>
<h5>[Academic Year: <?php echo DBhelper::getAcademicYearByBatch(yii::app()->session['batchName'], yii::app()->session['programmeCode']) ?> ]</h5>

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
	'id'=>'section-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
                
		'programmeCode',
                'batchName',
		'sectionName',
                'sec_startDate',
		'sec_startId',
                'sec_endId',
		
		
		
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
