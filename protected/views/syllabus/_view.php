<?php
/* @var $this SyllabusController */
/* @var $data Syllabus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('syllabusCode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->syllabusCode), array('view', 'id'=>$data->syllabusCode)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('syl_version')); ?>:</b>
	<?php echo CHtml::encode($data->syl_version); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('syl_approvedDate')); ?>:</b>
	<?php echo CHtml::encode($data->syl_approvedDate); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('syl_startTerm')); ?>:</b>
	<?php echo CHtml::encode(FormUtil::getTerm($data->syl_startTerm)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('syl_startYear')); ?>:</b>
	<?php echo CHtml::encode($data->syl_startYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('syl_endTerm')); ?>:</b>
	<?php echo CHtml::encode(FormUtil::getTerm($data->syl_endTerm)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('syl_endYear')); ?>:</b>
	<?php echo CHtml::encode($data->syl_endYear); ?>
	<br />

        
	<?php echo CHtml::link(CHtml::encode("Module"), array('Module/index', 'id'=>$data->syllabusCode)); ?>
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