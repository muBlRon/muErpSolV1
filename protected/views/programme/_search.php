<?php
/* @var $this ProgrammeController */
/* @var $model Programme */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'programmeCode'); ?>
		<?php echo $form->textField($model,'programmeCode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_name'); ?>
		<?php echo $form->textField($model,'pro_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_totalTerms'); ?>
		<?php echo $form->textField($model,'pro_totalTerms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_remarks'); ?>
		<?php echo $form->textArea($model,'pro_remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_type'); ?>
		<?php echo $form->textField($model,'pro_type',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_medium'); ?>
		<?php echo $form->textField($model,'pro_medium',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departmentID'); ?>
		<?php echo $form->textField($model,'departmentID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->