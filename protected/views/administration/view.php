<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Administrations'=>array('index'),
	$model->administrationCode,
);

$this->menu=array(
	array('label'=>'List Administration', 'url'=>array('index')),
	array('label'=>'Create Administration', 'url'=>array('create')),
	array('label'=>'Update Administration', 'url'=>array('update', 'id'=>$model->administrationCode)),
	array('label'=>'Delete Administration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->administrationCode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Administration', 'url'=>array('admin')),
);
?>

<h1>View Administration #<?php echo $model->administrationCode; ?></h1>

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
