<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
	'Programmes'=>array('index'),
	$model->programmeCode=>array('view','id'=>$model->programmeCode),
	'Update',
);

$this->menu=array(
	array('label'=>'List Programme', 'url'=>array('index')),
	array('label'=>'Create Programme', 'url'=>array('create')),
	array('label'=>'View Programme', 'url'=>array('view', 'id'=>$model->programmeCode)),
	array('label'=>'Manage Programme', 'url'=>array('admin')),
);
?>

<h1>Update Programme <?php echo $model->programmeCode; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>