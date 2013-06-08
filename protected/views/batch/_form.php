<?php
/* @var $this BatchController */
/* @var $model Batch */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'batch-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'batchName'); ?>
		<?php echo $form->textField($model,'batchName',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'batchName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bat_year'); ?>
		<?php echo $form->textField($model,'bat_year'); ?>
		<?php echo $form->error($model,'bat_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bat_advisor'); ?>
		<?php echo $form->textField($model,'bat_advisor'); ?>
		<?php echo $form->error($model,'bat_advisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programmeCode'); ?>
		<?php echo $form->textField($model,'programmeCode'); ?>
		<?php echo $form->error($model,'programmeCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bat_term'); ?>
		<?php echo $form->textField($model,'bat_term'); ?>
		<?php echo $form->error($model,'bat_term'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->