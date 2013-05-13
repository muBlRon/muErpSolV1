<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'employeeID'); ?>
		<?php echo $form->textField($model,'employeeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_designations'); ?>
		<?php echo $form->textField($model,'emp_designations',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_suppervisoryRole'); ?>
		<?php echo $form->textField($model,'emp_suppervisoryRole',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_joining'); ?>
		<?php echo $form->textField($model,'emp_joining'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_leave'); ?>
		<?php echo $form->textField($model,'emp_leave'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_loginName'); ?>
		<?php echo $form->textField($model,'emp_loginName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_accessLevel'); ?>
		<?php echo $form->textField($model,'emp_accessLevel',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'administrationCode'); ?>
		<?php echo $form->textField($model,'administrationCode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->