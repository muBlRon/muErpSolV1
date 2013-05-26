<?php
/* @var $this ProgrammeController */
/* @var $dataProvider CActiveDataProvider */


$this->breadcrumbs=array(
	'School'=>array('school/index'),
        'Department'=>array('Department/index', 'id'=>DBhelper::getSchoolIdFromDpt($id)),
	'Programme',
);

$this->menu=array(
	array('label'=>'Create Programme', 'url'=>array('create','id'=>$id)),
	array('label'=>'Manage Programme', 'url'=>array('admin')),
);
?>

<h1>Programmes</h1>
<h5>[ <?php echo $dptName; ?> ]</h5>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
