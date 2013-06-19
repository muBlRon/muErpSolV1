<?php
/* @var $this AcademicHistoryController */
/* @var $data AcademicHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('academicHistoryID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->academicHistoryID), array('view', 'id'=>$data->academicHistoryID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ach_degree')); ?>:</b>
	<?php echo CHtml::encode($data->ach_degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ach_group')); ?>:</b>
	<?php echo CHtml::encode($data->ach_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ach_institution')); ?>:</b>
	<?php echo CHtml::encode($data->ach_institution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ach_board')); ?>:</b>
	<?php echo CHtml::encode($data->ach_board); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ach_passingYear')); ?>:</b>
	<?php echo CHtml::encode($data->ach_passingYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ach_result')); ?>:</b>
	<?php echo CHtml::encode($data->ach_result); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ach_remarks')); ?>:</b>
	<?php echo CHtml::encode($data->ach_remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::encode($data->personID); ?>
	<br />

	*/ ?>
        
        <?php echo CHtml::link(CHtml::encode("Add Academic History"), array('academicHistory/create', 'id'=>$data->personID)); ?>
        <br />

</div>