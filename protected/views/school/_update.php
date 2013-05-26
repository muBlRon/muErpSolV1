<?php
/* @var $this SchoolController */
/* @var $model School */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'school-update',
	'enableAjaxValidation'=>true,
)); 

        $selected = $model->sch_deanStatus;

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'sch_dean'); ?>
		<?php //echo $form->textField($model,'sch_dean',array('size'=>10,'maxlength'=>10)); ?>
                
		<?php //echo $form->error($model,'sch_dean'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sch_deanStatus'); ?>
		<?php echo $form->radioButtonList(
                            $model,
                            'sch_deanStatus',
                            array('Dean'=>'Dean','Dean in Charge'=>'Dean in Charge'),
                            array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',) 
                            ); ?>
                <?php echo $form->dropDownList($model,'sch_dean',array('Dean in Charge'=>'Dean in Charge','Dean'=>'Dean'), 
                 array('options' => array($selected=>array('selected'=>true)))); ?>
		<?php echo $form->error($model,'sch_deanStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sch_remarks'); ?>
		<?php echo $form->textArea($model,'sch_remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sch_remarks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<?php /* echo $form->radioButtonList(
                            $model,
                            'sch_deanStatus',
                            array('Dean'=>'Dean','Dean in Charge'=>'Dean in Charge'),
                            array('labelOptions'=>array('style'=>'display:inline'), 'separator'=>'  ',) 
                            ); ?>
                <?php echo $form->dropDownList($model,'sch_dean',array('Dean in Charge'=>'Dean in Charge','Dean'=>'Dean'), 
                 array('options' => array($selected=>array('selected'=>true))));*/ ?>
