<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
    'registry'=>array('site/registry'),
	'Schools'=>array('index'),
	'Create',
);

$this->menu=array(
    array('label'=>'List School', 'url'=>array('index')),
    array('label'=>'Create School', 'url'=>'#','active'=>'true'),
	
	array('label'=>'Manage School', 'url'=>array('admin')),
);
?>

<h1>Create School</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>