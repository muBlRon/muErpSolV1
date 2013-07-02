<?php
/* @var $this AdministrationController */
/* @var $model Administration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-form2',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
        <div class="row">
		<?php echo $form->labelEx($model,'studentID'); ?>
                <?php 
                    $batch = new Batch;
                    $criteria=new CDbCriteria;
                    $criteria->select='bat_term';
                    $batch= Batch::model()->findAll(
                              array(
                              'select'=>'bat_term, bat_year',
                              'condition'=>'batchName=1'
                             ));                      
                  // $id = $batch->bat_term;
                ?>
		
		<?php echo $form->textField($model,'studentID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'studentID'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'adm_date'); ?>
               
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                		array(
                                        'attribute'=>'adm_date',
                                        'model'=>$model,
                                        'options' => array(
                                        'mode'=>'focus',
                                        'dateFormat'=>'yy-mm-dd',
                                        'showAnim' => 'slideDown',
                                        ),
                                        'htmlOptions'=>array('size'=>30,'class'=>'date'),
		)
		);?>
		
		<?php //echo $form->textField($persons,'per_dateofBirth'); ?>
		<?php echo $form->error($model,'adm_date'); ?>
	</div>
                <div class="row">
		<?php echo $form->labelEx($model,'adm_status'); ?>
		<?php echo $form->textField($model,'adm_status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'adm_status'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'adm_remarks'); ?>
                <?php echo $form->textField($model,'adm_remarks',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'adm_remarks'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'employeeID'); ?>
                <?php echo CHtml::dropDownList('employeeID','', CHtml::listData(Employee::model()->findAll(),
                   'employeeID','employeeID'),array('employeeID'=>'employeeID'));?>
            	<?php echo $form->error($model,'employeeID'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Continue' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->