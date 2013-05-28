<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">
		<?php //echo $form->labelEx($model,'employeeID'); ?>
		<?php //echo $form->textField($model,'employeeID'); ?>
		<?php //echo $form->error($model,'employeeID'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'emp_designations'); ?>
		<?php echo $form->textField($model,'emp_designations',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'emp_designations'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_suppervisoryRole'); ?>
		<?php echo $form->textField($model,'emp_suppervisoryRole',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'emp_suppervisoryRole'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_joining'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                		array(
                                        'attribute'=>'emp_joining',
                                        'model'=>$model,
                                        'options' => array(
                                        'mode'=>'focus',
                                        'dateFormat'=>'yy-m-d',
                                        'showAnim' => 'slideDown',
                                        ),
                                        'htmlOptions'=>array('size'=>30,'class'=>'date'),
		)
		);?>
		<?php //echo $form->textField($model,'emp_joining'); ?>
		<?php echo $form->error($model,'emp_joining'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_leave'); ?>
		<?php echo $form->textField($model,'emp_leave'); ?>
		<?php echo $form->error($model,'emp_leave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_loginName'); ?>
		<?php echo $form->textField($model,'emp_loginName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emp_loginName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_password'); ?>
		<?php echo $form->textField($model,'emp_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_accessLevel'); ?>
		<?php echo $form->textField($model,'emp_accessLevel',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'emp_accessLevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'administrationCode'); ?>
		<?php echo $form->textField($model,'administrationCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'administrationCode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->