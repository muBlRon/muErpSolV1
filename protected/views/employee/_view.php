<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employeeID), array('view', 'id'=>$data->employeeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_designations')); ?>:</b>
	<?php echo CHtml::encode($data->emp_designations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_suppervisoryRole')); ?>:</b>
	<?php echo CHtml::encode($data->emp_suppervisoryRole); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_joining')); ?>:</b>
	<?php echo CHtml::encode($data->emp_joining); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_leave')); ?>:</b>
	<?php echo CHtml::encode($data->emp_leave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_loginName')); ?>:</b>
	<?php echo CHtml::encode($data->emp_loginName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_password')); ?>:</b>
	<?php echo CHtml::encode($data->emp_password); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_accessLevel')); ?>:</b>
	<?php echo CHtml::encode($data->emp_accessLevel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('administrationCode')); ?>:</b>
	<?php echo CHtml::encode($data->administrationCode); ?>
	<br />

	*/ ?>

</div>