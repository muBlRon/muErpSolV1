<?php
/* @var $this SyllabusController */
/* @var $data Syllabus */
?>

<div class="view">

    <b>

	<b><?php echo CHtml::encode($data->getAttributeLabel('sectionName')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sectionName), array('view', 'id'=>$data->sectionName)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_startDate')); ?>:</b>
	<?php echo CHtml::encode($data->sec_startDate); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('sec_startId')); ?>:</b>
	<?php echo CHtml::encode($data->sec_startId); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('sec_endId')); ?>:</b>
	<?php echo CHtml::encode($data->sec_endId); ?>
	<br />
        <br/>
        
	<?php echo CHtml::link(CHtml::encode("students"), array('student/index', 'id'=>$data->sectionName)); ?>
	<br />
        
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('syl_maxCreditHour')); ?>:</b>
	<?php echo CHtml::encode($data->syl_maxCreditHour); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('syl_maxGPA')); ?>:</b>
	<?php echo CHtml::encode($data->syl_maxGPA); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('syl_minGPA')); ?>:</b>
	<?php echo CHtml::encode($data->syl_minGPA); ?>
	<br />

	

	*/ ?>

</div>