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
		<?php echo $form->label($model,'sectionName'); ?>
		<?php echo $form->textField($model,'sectionName',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_startDate'); ?>
                <?php echo $form->textField($model,'sec_startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_startId'); ?>
		<?php echo $form->textArea($model,'sec_startId',array('rows'=>6, 'cols'=>50)); ?>
	</div>

    <div class="row">
		<?php echo $form->label($model,'sec_endId'); ?>
		<?php echo $form->textArea($model,'sec_endId',array('rows'=>6, 'cols'=>50)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->