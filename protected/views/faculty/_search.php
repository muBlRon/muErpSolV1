<?php
/* @var $this FacultyController */
/* @var $model Faculty */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'facultyID'); ?>
		<?php echo $form->textField($model,'facultyID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fac_designation'); ?>
		<?php echo $form->textField($model,'fac_designation',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fac_position'); ?>
		<?php echo $form->textField($model,'fac_position',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fac_joining'); ?>
		<?php echo $form->textField($model,'fac_joining'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fac_leave'); ?>
		<?php echo $form->textField($model,'fac_leave'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fac_loginName'); ?>
		<?php echo $form->textField($model,'fac_loginName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fac_accessLevel'); ?>
		<?php echo $form->textField($model,'fac_accessLevel',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departmentID'); ?>
		<?php echo $form->textField($model,'departmentID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->