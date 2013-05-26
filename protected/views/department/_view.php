<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dpt_code), array('view', 'id'=>$data->departmentID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_name')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_name); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_contactNo')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_contactNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_email')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_email); ?>
	
        <br />
	<?php echo CHtml::link(CHtml::encode("Programmes"), array('programme/Index', 'id'=>$data->departmentID)); ?>
        <br />
        
	<?php echo CHtml::link(CHtml::encode("Faculty"), array('faculty/Index', 'id'=>$data->departmentID)); ?>
        <br />
	
</div>