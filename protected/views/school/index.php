<?php
/* @var $this SchoolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'registry'=>array('site/registry'),
    'school'
);



$this->menu=array(
        array('label'=>'List School', 'url'=>'#','active'=>true),
	array('label'=>'Create School', 'url'=>array('create')),
	array('label'=>'Manage School', 'url'=>array('admin')),
    
    array('label'=>'Back to  Registry', 'url'=>array('site/registry',)),
);
?>

 

<h1>Schools</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 

?>
