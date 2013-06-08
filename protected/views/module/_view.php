<?php
/* @var $this ModuleController */
/* @var $data Module */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('moduleCode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->moduleCode), array('view', 'id'=>$data->moduleCode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('syllabusCode')); ?>:</b>
	<?php echo CHtml::encode($data->syllabusCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_name')); ?>:</b>
	<?php echo CHtml::encode($data->mod_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_shortName')); ?>:</b>
	<?php echo CHtml::encode($data->mod_shortName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_creditHour')); ?>:</b>
	<?php echo CHtml::encode($data->mod_creditHour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_type')); ?>:</b>
	<?php echo CHtml::encode($data->mod_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_labIncluded')); ?>:</b>
	<?php echo CHtml::encode($data->mod_labIncluded); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_mejor')); ?>:</b>
	<?php echo CHtml::encode($data->mod_mejor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_group')); ?>:</b>
	<?php echo CHtml::encode($data->mod_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_sequence')); ?>:</b>
	<?php echo CHtml::encode($data->mod_sequence); ?>
	<br />

	*/ ?>

</div>