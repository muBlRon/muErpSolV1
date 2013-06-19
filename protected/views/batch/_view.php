<?php
/* @var $this SyllabusController */
/* @var $data Syllabus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('batchName')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->batchName.FormUtil::getBatchNameSufix($data->batchName)), array('view', 'id'=>$data->batchName)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('bat_term')); ?>:</b>
	<?php echo CHtml::encode($data->bat_term); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('bat_year')); ?>:</b>
	<?php echo CHtml::encode($data->bat_year); ?>
	<br />
        <br/>
        
	<?php echo CHtml::link(CHtml::encode("sections"), array('section/index', 'id'=>$data->batchName)); ?>
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