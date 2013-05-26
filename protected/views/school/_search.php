<?php
/* @var $this SchoolController */
/* @var $model School */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sch_code'); ?>
		<?php echo $form->textField($model,'sch_code',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sch_name'); ?>
		<?php echo $form->textField($model,'sch_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sch_remarks'); ?>
		<?php echo $form->textArea($model,'sch_remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sch_dean'); ?>
		<?php echo $form->textField($model,'sch_dean'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sch_deanStatus'); ?>
		<?php echo $form->textField($model,'sch_deanStatus',array('size'=>14,'maxlength'=>14)); ?>
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