<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'syllabus-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'syllabusID'); ?>
		<?php echo $form->textField($model,'syllabusID'); ?>
		<?php echo $form->error($model,'syllabusID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programmeCode'); ?>
		<?php echo $form->textField($model,'programmeCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'programmeCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_version'); ?>
		<?php echo $form->textField($model,'syl_version'); ?>
		<?php echo $form->error($model,'syl_version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_startTerm'); ?>
		<?php echo $form->textField($model,'syl_startTerm',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'syl_startTerm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_startYear'); ?>
		<?php echo $form->textField($model,'syl_startYear'); ?>
		<?php echo $form->error($model,'syl_startYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_endTerm'); ?>
		<?php echo $form->textField($model,'syl_endTerm',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'syl_endTerm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_endYear'); ?>
		<?php echo $form->textField($model,'syl_endYear'); ?>
		<?php echo $form->error($model,'syl_endYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_maxCreditHour'); ?>
		<?php echo $form->textField($model,'syl_maxCreditHour'); ?>
		<?php echo $form->error($model,'syl_maxCreditHour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_description'); ?>
		<?php echo $form->textArea($model,'syl_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'syl_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_minGPA'); ?>
		<?php echo $form->textField($model,'syl_minGPA'); ?>
		<?php echo $form->error($model,'syl_minGPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_maxGPA'); ?>
		<?php echo $form->textField($model,'syl_maxGPA'); ?>
		<?php echo $form->error($model,'syl_maxGPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'syl_approvedDate'); ?>
		<?php echo $form->textField($model,'syl_approvedDate'); ?>
		<?php echo $form->error($model,'syl_approvedDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->