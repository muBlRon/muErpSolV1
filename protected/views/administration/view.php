<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
	'Administrative Departments'=>array('index'),
	$model->administrationCode,
);

$this->menu=array(
	array('label'=>'List Department', 'url'=>array('index')),
	
	array('label'=>'Update Department', 'url'=>array('update', 'id'=>$model->administrationCode)),
	array('label'=>'Delete Department', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->administrationCode),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1><?php echo $model->adm_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'administrationCode',
		'adm_name',
		'adm_location',
		'adm_remarks',
		'adm_contactNo',
		'adm_email',
	),
)); ?>
