<?php
/* @var $this ModuleController */
/* @var $model Module */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'moduleCode'); ?>
		<?php echo $form->textField($model,'moduleCode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'syllabusCode'); ?>
		<?php echo $form->textField($model,'syllabusCode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_name'); ?>
		<?php echo $form->textField($model,'mod_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_shortName'); ?>
		<?php echo $form->textField($model,'mod_shortName',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_creditHour'); ?>
		<?php echo $form->textField($model,'mod_creditHour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_type'); ?>
		<?php echo $form->textField($model,'mod_type',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_labIncluded'); ?>
		<?php echo $form->textField($model,'mod_labIncluded',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_mejor'); ?>
		<?php echo $form->textField($model,'mod_mejor',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_group'); ?>
		<?php echo $form->textField($model,'mod_group',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_sequence'); ?>
		<?php echo $form->textField($model,'mod_sequence'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->