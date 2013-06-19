<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
    'enableAjaxValidation'=>false,
    'id'=>'employee-form',
    'stateful'=>true,
));
?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <?php echo $form->errorSummary($persons); ?>
        
	<div class="row">
		<?php echo $form->labelEx($persons,'per_title'); ?>
                <?php echo CHtml::activeDropDownList( $persons,'per_title',ZHtml::enumItem($persons, 'per_title') ); ?>
                <?php echo $form->error($persons,'per_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persons,'per_firstName'); ?>
		<?php echo $form->textField($persons,'per_firstName'); ?>
		<?php echo $form->error($persons,'per_firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persons,'per_lastName'); ?>
		<?php echo $form->textField($persons,'per_lastName'); ?>
		<?php echo $form->error($persons,'per_lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persons,'per_gender'); ?>
                <?php echo ZHtml::enumRadioButtonList($persons,'per_gender',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>     
                <?php echo $form->error($persons,'per_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persons,'per_nationality'); ?>
		<?php echo $form->textField($persons,'per_nationality'); ?>
		<?php echo $form->error($persons,'per_nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persons,'per_maritulStatus'); ?>
                <?php echo ZHtml::enumRadioButtonList( $persons,'per_maritulStatus',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>
		<?php echo $form->error($persons,'per_maritulStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persons,'per_dateofBirth'); ?>
               
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                		array(
                                        'attribute'=>'per_dateofBirth',
                                        'model'=>$persons,
                                        'options' => array(
                                        'mode'=>'focus',
                                        'dateFormat'=>'yy-mm-dd',
                                        'showAnim' => 'slideDown',
                                        ),
                                        'htmlOptions'=>array('size'=>30,'class'=>'date'),
		)
		);?>
		
		<?php //echo $form->textField($persons,'per_dateofBirth'); ?>
		<?php echo $form->error($persons,'per_dateofBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persons,'per_fathersName'); ?>
		<?php echo $form->textField($persons,'per_fathersName'); ?>
		<?php echo $form->error($persons,'per_fathersName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persons,'per_husbandsName'); ?>
		<?php echo $form->textField($persons,'per_husbandsName'); ?>
		<?php echo $form->error($persons,'per_husbandsName'); ?>
	</div>

         <div class="row">
		<?php echo $form->labelEx($persons,'per_mothersName'); ?>
		<?php echo $form->textField($persons,'per_mothersName'); ?>
		<?php echo $form->error($persons,'per_mothersName'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($persons,'per_presentAddress'); ?>
		<?php echo $form->textField($persons,'per_presentAddress'); ?>
		<?php echo $form->error($persons,'per_presentAddress'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($persons,'per_postCode'); ?>
		<?php echo $form->textField($persons,'per_postCode'); ?>
		<?php echo $form->error($persons,'per_postCode'); ?>
	</div>
       
	<div class="row">
		<?php echo $form->labelEx($persons,'per_mobile'); ?>
		<?php echo $form->textField($persons,'per_mobile'); ?>
		<?php echo $form->error($persons,'per_mobile'); ?>
	</div>

         <div class="row">
		<?php echo $form->labelEx($persons,'per_email'); ?>
		<?php echo $form->textField($persons,'per_email'); ?>
		<?php echo $form->error($persons,'per_email'); ?>
	</div>

         <div class="row">
		<?php echo $form->labelEx($persons,'per_telephone'); ?>
		<?php echo $form->textField($persons,'per_telephone'); ?>
		<?php echo $form->error($persons,'per_telephone'); ?>
	</div>
         
	<div class="row">
		<?php echo $form->labelEx($persons,'per_bloodGroup'); ?>
                <?php echo ZHtml::enumRadioButtonList($persons, 'per_bloodGroup',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>        
		<?php echo $form->error($persons,'per_bloodGroup'); ?>
	</div>
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
            	<?php echo CHtml::submitButton('Finish', array('name'=>'finish'));?> 
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->