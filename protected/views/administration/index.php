<?php
/* @var $this AdministrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Administrations',
);

$this->menu=array(
	array('label'=>'Create Administration', 'url'=>array('create')),
	array('label'=>'Manage Administration', 'url'=>array('admin')),
);
?>

<h1>Administrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
