<?php
/* @var $this AdministrationController */
/* @var $data Administration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('administrationCode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->administrationCode), array('view', 'id'=>$data->administrationCode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_name')); ?>:</b>
	<?php echo CHtml::encode($data->adm_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_location')); ?>:</b>
	<?php echo CHtml::encode($data->adm_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_remarks')); ?>:</b>
	<?php echo CHtml::encode($data->adm_remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_contactNo')); ?>:</b>
	<?php echo CHtml::encode($data->adm_contactNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_email')); ?>:</b>
	<?php echo CHtml::encode($data->adm_email); ?>
	<br />


</div>