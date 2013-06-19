<?php
/* @var $this JobExperianceController */
/* @var $model JobExperiance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-experiance-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jobExperianceID'); ?>
		<?php echo $form->textField($model,'jobExperianceID'); ?>
		<?php echo $form->error($model,'jobExperianceID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joe_employer'); ?>
		<?php echo $form->textField($model,'joe_employer',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'joe_employer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joe_address'); ?>
		<?php echo $form->textField($model,'joe_address',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'joe_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joe_position'); ?>
		<?php echo $form->textField($model,'joe_position',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'joe_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joe_startDate'); ?>
		<?php echo $form->textField($model,'joe_startDate'); ?>
		<?php echo $form->error($model,'joe_startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joe_endDate'); ?>
		<?php echo $form->textField($model,'joe_endDate'); ?>
		<?php echo $form->error($model,'joe_endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joe_contact'); ?>
		<?php echo $form->textField($model,'joe_contact',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'joe_contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personID'); ?>
		<?php echo $form->textField($model,'personID'); ?>
		<?php echo $form->error($model,'personID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->