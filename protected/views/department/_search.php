<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dpt_code'); ?>
		<?php echo $form->textField($model,'dpt_code',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpt_name'); ?>
		<?php echo $form->textField($model,'dpt_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpt_location'); ?>
		<?php echo $form->textField($model,'dpt_location',array('size'=>60,'maxlength'=>350)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpt_contactNo'); ?>
		<?php echo $form->textField($model,'dpt_contactNo',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpt_email'); ?>
		<?php echo $form->textField($model,'dpt_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpt_remarks'); ?>
		<?php echo $form->textArea($model,'dpt_remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpt_head'); ?>
		<?php echo $form->textField($model,'dpt_head'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dpt_headStatus'); ?>
		<?php echo $form->textField($model,'dpt_headStatus',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departmentID'); ?>
		<?php echo $form->textField($model,'departmentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->