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
		<?php echo $form->label($model,'batchName'); ?>
		<?php echo $form->textField($model,'batchName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bat_term'); ?>
		<?php echo $form->textField($model,'bat_term'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bat_year'); ?>
		<?php echo $form->textArea($model,'bat_year',array('rows'=>6, 'cols'=>50)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->