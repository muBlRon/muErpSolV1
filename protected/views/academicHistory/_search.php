<?php
/* @var $this AcademicHistoryController */
/* @var $model AcademicHistory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'academicHistoryID'); ?>
		<?php echo $form->textField($model,'academicHistoryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ach_degree'); ?>
		<?php echo $form->textField($model,'ach_degree',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ach_group'); ?>
		<?php echo $form->textField($model,'ach_group',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ach_institution'); ?>
		<?php echo $form->textField($model,'ach_institution',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ach_board'); ?>
		<?php echo $form->textField($model,'ach_board',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ach_passingYear'); ?>
		<?php echo $form->textField($model,'ach_passingYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ach_result'); ?>
		<?php echo $form->textField($model,'ach_result'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ach_remarks'); ?>
		<?php echo $form->textArea($model,'ach_remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personID'); ?>
		<?php echo $form->textField($model,'personID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->