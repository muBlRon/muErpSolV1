<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <?php echo $form->errorSummary($persons); ?>
        <div class="row">
		<?php echo $form->labelEx($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'studentID'); ?>
	</div>

        	<div class="row">
		<?php echo $form->labelEx($model,'stu_previousID'); ?>
		<?php echo $form->textField($model,'stu_previousID',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'stu_previousID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_previousDegree'); ?>
		<?php echo $form->textField($model,'stu_previousDegree',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'stu_previousDegree'); ?>
	</div>

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
	<div class="row">
		<?php echo $form->labelEx($model,'stu_academicTerm'); ?>
		<?php echo $form->textField($model,'stu_academicTerm',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'stu_academicTerm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_academicYear'); ?>
		<?php echo $form->textField($model,'stu_academicYear'); ?>
		<?php echo $form->error($model,'stu_academicYear'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Continue' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->