<?php
/* @var $this EmployeeController */
/* @var $employee Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($employee); ?>

	<div class="row">
		<?php echo $form->labelEx($employee,'employeeID'); ?>
		<?php echo $form->textField($employee,'employeeID'); ?>
		<?php echo $form->error($employee,'employeeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employee,'emp_designations'); ?>
		<?php echo $form->textField($employee,'emp_designations',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($employee,'emp_designations'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employee,'emp_suppervisoryRole'); ?>
		<?php echo $form->textField($employee,'emp_suppervisoryRole',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($employee,'emp_suppervisoryRole'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employee,'emp_joining'); ?>
		<?php echo $form->textField($employee,'emp_joining'); ?>
		<?php echo $form->error($employee,'emp_joining'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employee,'emp_leave'); ?>
		<?php echo $form->textField($employee,'emp_leave'); ?>
		<?php echo $form->error($employee,'emp_leave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employee,'emp_loginName'); ?>
		<?php echo $form->textField($employee,'emp_loginName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($employee,'emp_loginName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employee,'emp_password'); ?>
		<?php echo $form->textField($employee,'emp_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($employee,'emp_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employee,'emp_accessLevel'); ?>
		<?php echo $form->textField($employee,'emp_accessLevel',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($employee,'emp_accessLevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employee,'administrationCode'); ?>
		<?php echo $form->textField($employee,'administrationCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($employee,'administrationCode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Back', array('name' => 'step1')); ?>
        <? echo '&nbsp;&nbsp;&nbsp;'; ?>
        <?php echo CHtml::submitButton('Continue', array('name' => 'Step3')); ?> 

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->