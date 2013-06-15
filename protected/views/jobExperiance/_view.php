<?php
/* @var $this JobExperianceController */
/* @var $data JobExperiance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobExperianceID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jobExperianceID), array('view', 'id'=>$data->jobExperianceID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joe_employer')); ?>:</b>
	<?php echo CHtml::encode($data->joe_employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joe_address')); ?>:</b>
	<?php echo CHtml::encode($data->joe_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joe_position')); ?>:</b>
	<?php echo CHtml::encode($data->joe_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joe_startDate')); ?>:</b>
	<?php echo CHtml::encode($data->joe_startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joe_endDate')); ?>:</b>
	<?php echo CHtml::encode($data->joe_endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joe_contact')); ?>:</b>
	<?php echo CHtml::encode($data->joe_contact); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::encode($data->personID); ?>
	<br />

	*/ ?>
         <?php echo CHtml::link(CHtml::encode("Add Job Expriance"), array('jobexperiance/create', 'id'=>$data->personID)); ?>
        <br/>
        
</div>