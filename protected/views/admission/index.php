<?php
/* @var $this AdministrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Admission',
);

$this->menu=array(
	array('label'=>'Take Admission', 'url'=>array('create')),
	array('label'=>'Manage Admission', 'url'=>array('admin')),
        array('label'=>'Re-admission', 'url'=>array('admin')),
        array('label'=>'Re-admission', 'url'=>array('admin')),
        array('label'=>'School', 'url'=>array('school/index')),
        
);
?>

<h1>Admission</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
