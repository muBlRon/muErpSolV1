<?php
/* @var $this ProgrammeController */
/* @var $data Programme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('programmeCode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->programmeCode), array('view', 'id'=>$data->programmeCode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_name')); ?>:</b>
	<?php echo CHtml::encode($data->pro_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_totalTerms')); ?>:</b>
	<?php echo CHtml::encode($data->pro_totalTerms); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_type')); ?>:</b>
	<?php echo CHtml::encode($data->pro_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_startTerm')); ?>:</b>
	<?php echo CHtml::encode(FormUtil::getTerm($data->pro_startTerm)); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_startYear')); ?>:</b>
	<?php echo CHtml::encode($data->pro_startYear); ?>
	<br />
        <br />
	<?php echo CHtml::link(CHtml::encode("Syllabus"), array('syllabus/Index', 'id'=>$data->programmeCode)); ?>
        <br />
        <?php echo CHtml::link(CHtml::encode("Batchs"), array('batch/Index', 'id'=>$data->programmeCode)); ?>
        <br />


</div>