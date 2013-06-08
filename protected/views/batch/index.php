<?php
/* @var $this SyllabusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Batches',
);

$this->menu=array(
	array('label'=>'Create Batches', 'url'=>array('create')),
	array('label'=>'Manage Batches', 'url'=>array('admin')),
);
?>

<h1>Batch</h1>
<h5>[ <?php echo yii::app()->session['programmeName']; ?> ]</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
