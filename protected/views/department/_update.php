<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'department-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_code'); ?>
		<?php echo $form->textField($model,'dpt_code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dpt_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_name'); ?>
		<?php echo $form->textField($model,'dpt_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dpt_name'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'dpt_headStatus'); ?>
		<?php echo $form->radioButtonList(
                            $model,
                            'dpt_headStatus',
                            array('Head'=>'Head','Head in Charge'=>'Head in Charge'),
                            array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',) 
                            ); ?>
              
	</div>

        <div class="row">
                <?php echo $form->labelEx($model,'dpt_head'); ?>
		<?php echo $form->dropDownList($model,'dpt_head',array('1'=>'faculty 1','2'=>'faculty 2'), 
                 array('options' => array($selected=>array('selected'=>true)))); ?>
		<?php echo $form->error($model,'dpt_head'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'dpt_remarks'); ?>
		<?php echo $form->textArea($model,'dpt_remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dpt_remarks'); ?>
	</div>


	
	
        
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->