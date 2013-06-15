<?php
/* @var $this ProgrammeController */
/* @var $model Programme */
echo $model->departmentID;
$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
	'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=> Yii::app()->session['schoolID']),
	'Programme'=>array('Programme/index','id'=>Yii::app()->session['departmentID']),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Programme', 'url'=>array('index','id'=>Yii::app()->session['departmentID'])),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#programme-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Programmes</h1>

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
	'id'=>'programme-grid',
	'dataProvider'=>$model->search(Yii::app()->session['departmentID']),
	'filter'=>$model,
	'columns'=>array(
		'programmeCode',
                'pro_shortName',
                'pro_name',
                
		
		'pro_startTerm',
                'pro_startYear',
		'pro_type',
                'pro_totalTerms',
		
		
		
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
