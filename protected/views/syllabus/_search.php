<?php
/* @var $this SyllabusController */
/* @var $model Syllabus */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'syllabusID'); ?>
		<?php echo $form->textField($model,'syllabusID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'programmeCode'); ?>
		<?php echo $form->textField($model,'programmeCode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_version'); ?>
		<?php echo $form->textField($model,'syl_version'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_startTerm'); ?>
		<?php echo $form->textField($model,'syl_startTerm',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_startYear'); ?>
		<?php echo $form->textField($model,'syl_startYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_endTerm'); ?>
		<?php echo $form->textField($model,'syl_endTerm',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_endYear'); ?>
		<?php echo $form->textField($model,'syl_endYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_maxCreditHour'); ?>
		<?php echo $form->textField($model,'syl_maxCreditHour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_description'); ?>
		<?php echo $form->textArea($model,'syl_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_minGPA'); ?>
		<?php echo $form->textField($model,'syl_minGPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_maxGPA'); ?>
		<?php echo $form->textField($model,'syl_maxGPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syl_approvedDate'); ?>
		<?php echo $form->textField($model,'syl_approvedDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->