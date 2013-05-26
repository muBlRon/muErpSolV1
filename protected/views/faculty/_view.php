<?php
/* @var $this FacultyController */
/* @var $data Faculty */
?>

<div class="view">

	<b><?php echo CHtml::encode("Name:"); ?>:</b>
	<?php echo CHtml::link(CHtml::encode(Person::model()->findByPk($data->facultyID)->per_firstName), array('view', 'id'=>$data->facultyID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fac_designation')); ?>:</b>
	<?php echo CHtml::encode($data->fac_designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fac_position')); ?>:</b>
	<?php echo CHtml::encode($data->fac_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fac_joining')); ?>:</b>
	<?php echo CHtml::encode($data->fac_joining); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fac_leave')); ?>:</b>
	<?php echo CHtml::encode($data->fac_leave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fac_loginName')); ?>:</b>
	<?php echo CHtml::encode($data->fac_loginName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fac_password')); ?>:</b>
	<?php echo CHtml::encode($data->fac_password); ?>
	<br />

	<br />
	<?php echo CHtml::link(CHtml::encode("Academic History"), array('AcademicHistory/Index', 'id'=>$data->facultyID)); ?>
        <br />
        
	<?php echo CHtml::link(CHtml::encode("Job Experiance"), array('JobExperiance/Index', 'id'=>$data->facultyID)); ?>
        <br />

</div>