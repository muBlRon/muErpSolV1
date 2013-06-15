<?php
/* @var $this BatchController */
/* @var $model Batch */
/* @var $form CActiveForm */
?>

<div  class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'batch-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

       <div class="row">
		<?php echo $form->labelEx($model,'bat_term'); ?>
		<?php echo $form->textField($model,'bat_term',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'bat_term'); ?>
                
	</div>
	
        <div class="row">
		<?php echo $form->labelEx($model,'bat_year'); ?>
		<?php echo $form->textField($model,'bat_year',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'bat_year'); ?>
                
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'batchName'); ?>
		<?php echo $form->textField($model,'batchName',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'batchName'); ?>
                <?php  echo Chtml::hiddenField('id', 0); ?>
	</div>
        


	<div class="row buttons">
		 <?php echo CHtml::ajaxButton('submit', array('batch/test')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->