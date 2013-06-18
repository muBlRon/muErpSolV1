<?php
/* @var $this SectionController */
/* @var $model Section */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'section-update',
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	


	<div class="row">
		<?php echo $form->labelEx($model,'sec_startId'); ?>
		<?php echo $form->textField($model,'sec_startId'); ?>
		<?php echo $form->error($model,'sec_startId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_endId'); ?>
		<?php echo $form->textField($model,'sec_endId'); ?>
		<?php echo $form->error($model,'sec_endId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_startDate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
        'attribute'=>'sec_startDate',
        'model'=>$model,
        'options' => array(
                          'mode'=>'focus',
                          'dateFormat'=>'yy-mm-dd',
                          'showAnim' => 'slideDown',
                          ),
			'htmlOptions'=>array('size'=>10,'class'=>'date'),
		)
		);?>
		<?php echo $form->error($model,'sec_startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_remarks'); ?>
		<?php echo $form->textField($model,'sec_remarks'); ?>
		<?php echo $form->error($model,'sec_remarks'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->