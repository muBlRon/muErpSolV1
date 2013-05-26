<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->sch_code=>array('view','id'=>$model->schoolID),
	'Update',
);

$this->menu=array(
	array('label'=>'List School', 'url'=>array('index')),
	array('label'=>'Create School', 'url'=>array('create')),
	array('label'=>'View School', 'url'=>array('view', 'id'=>$model->schoolID)),
	array('label'=>'Manage School', 'url'=>array('admin')),
);
?>

<h1>Update School # <?php echo $model->sch_code; ?></h1>

<?php echo $this->renderPartial('_update', array('model'=>$model)); ?>