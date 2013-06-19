<?php
/* @var $this ModuleController */
/* @var $model Module */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'module-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'moduleCode'); ?>
		<?php echo $form->textField($model,'moduleCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'moduleCode'); ?>
	</div>

        
        
	<div class="row">
		<?php echo $form->labelEx($model,'mod_name'); ?>
		<?php echo $form->textField($model,'mod_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mod_name'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'mod_shortName'); ?>
		<?php echo $form->textField($model,'mod_shortName',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mod_shortName'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'mod_type'); ?>
		<?php echo $form->radioButtonList(
                            $model,
                            'mod_type',
                            array('0'=>'Non Lab','1'=>'Lab'),
                            array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',) 
       
                        ); ?>
		<?php echo $form->error($model,'mod_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mod_labIncluded'); ?>
		<?php echo $form->radioButtonList(
                            $model,
                            'mod_labIncluded',
                            array('0'=>'No','1'=>'Yes'),
                            array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',) 
       
                        ); ?>
		<?php echo $form->error($model,'mod_labIncluded'); ?>
	</div>

        
        
	<div class="row">
		<?php echo $form->labelEx($model,'mod_creditHour'); ?>
		<?php echo $form->radioButtonList(
                            $model,
                            'mod_creditHour',
                            ZHtml::enumItem($model, 'mod_creditHour'),
                            array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',) 
       
                        ); ?>
		<?php echo $form->error($model,'mod_creditHour'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'mod_mejor'); ?>
		<?php echo $form->radioButtonList(
                            $model,
                            'mod_mejor',
                            array('0'=>'No','1'=>'Yes'),
                            array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',) 
       
                        ); ?>
		<?php echo $form->error($model,'mod_mejor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mod_group'); ?>
		<?php echo $form->textField($model,'mod_group',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'mod_group'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->