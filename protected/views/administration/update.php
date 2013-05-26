<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Administrations'=>array('index'),
	$model->administrationCode=>array('view','id'=>$model->administrationCode),
	'Update',
);

$this->menu=array(
	array('label'=>'List Administration', 'url'=>array('index')),
	array('label'=>'Create Administration', 'url'=>array('create')),
	array('label'=>'View Administration', 'url'=>array('view', 'id'=>$model->administrationCode)),
	array('label'=>'Manage Administration', 'url'=>array('admin')),
);
?>

<h1>Update Administration <?php echo $model->administrationCode; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>