<?php
/* @var $this JobExperianceController */
/* @var $model JobExperiance */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jobExperianceID'); ?>
		<?php echo $form->textField($model,'jobExperianceID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joe_employer'); ?>
		<?php echo $form->textField($model,'joe_employer',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joe_address'); ?>
		<?php echo $form->textField($model,'joe_address',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joe_position'); ?>
		<?php echo $form->textField($model,'joe_position',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joe_startDate'); ?>
		<?php echo $form->textField($model,'joe_startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joe_endDate'); ?>
		<?php echo $form->textField($model,'joe_endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joe_contact'); ?>
		<?php echo $form->textField($model,'joe_contact',array('size'=>15,'maxlength'=>15)); ?>
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