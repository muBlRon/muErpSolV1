<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'School'=>array('index'),
	$model->sch_code,
);

$this->menu=array(
	array('label'=>'List School', 'url'=>array('index')),
	
	array('label'=>'Update School', 'url'=>array('update', 'id'=>$model->schoolID)),
	array('label'=>'Delete School', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->schoolID),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1> <?php echo $model->sch_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sch_code',
		'sch_name',
		
		'sch_dean',
		'sch_deanStatus',
                'sch_remarks',
		
	),
)); ?>
