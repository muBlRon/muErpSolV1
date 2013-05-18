<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'per_title'); ?>
		<?php echo $form->textField($model,'per_title',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'per_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_firstName'); ?>
		<?php echo $form->textField($model,'per_firstName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_lastName'); ?>
		<?php echo $form->textField($model,'per_lastName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_gender'); ?>
		<?php echo $form->textField($model,'per_gender',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'per_gender'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'per_dateofBirth'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
        'attribute'=>'per_dateofBirth',
        'model'=>$model,
        'options' => array(
                          'mode'=>'focus',
                          'dateFormat'=>'d MM, yy',
                          'showAnim' => 'slideDown',
                          ),
			'htmlOptions'=>array('size'=>30,'class'=>'date'),
		)
		);?>
		<?php echo $form->error($model,'per_dateofBirth'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'per_bloodGroup'); ?>
		<?php echo $form->textField($model,'per_bloodGroup',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'per_bloodGroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_nationality'); ?>
		<?php echo $form->textField($model,'per_nationality',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'per_nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_fathersName'); ?>
		<?php echo $form->textField($model,'per_fathersName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_fathersName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_mothersName'); ?>
		<?php echo $form->textField($model,'per_mothersName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_mothersName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_husbandsName'); ?>
		<?php echo $form->textField($model,'per_husbandsName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_husbandsName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_parmanentAddress'); ?>
		<?php echo $form->textField($model,'per_parmanentAddress',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_parmanentAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_postCode'); ?>
		<?php echo $form->textField($model,'per_postCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'per_postCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_telephone'); ?>
		<?php echo $form->textField($model,'per_telephone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'per_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_mobile'); ?>
		<?php echo $form->textField($model,'per_mobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'per_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_email'); ?>
		<?php echo $form->textField($model,'per_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_presentAddress'); ?>
		<?php echo $form->textField($model,'per_presentAddress',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_presentAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_maritulStatus'); ?>
		<?php echo $form->textField($model,'per_maritulStatus',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'per_maritulStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_englishLanguageProficiency'); ?>
		<?php echo $form->textField($model,'per_englishLanguageProficiency',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'per_englishLanguageProficiency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_computerLiteracy'); ?>
		<?php echo $form->textField($model,'per_computerLiteracy',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_computerLiteracy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_otherActivities'); ?>
		<?php echo $form->textField($model,'per_otherActivities',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_otherActivities'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_personalStatment'); ?>
		<?php echo $form->textArea($model,'per_personalStatment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'per_personalStatment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_criminalConviction'); ?>
		<?php echo $form->textField($model,'per_criminalConviction'); ?>
		<?php echo $form->error($model,'per_criminalConviction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_convictionDetails'); ?>
		<?php echo $form->textArea($model,'per_convictionDetails',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'per_convictionDetails'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeOneName'); ?>
		<?php echo $form->textField($model,'per_refereeOneName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_refereeOneName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeOneOccupation'); ?>
		<?php echo $form->textField($model,'per_refereeOneOccupation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_refereeOneOccupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeOneAddress'); ?>
		<?php echo $form->textField($model,'per_refereeOneAddress',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_refereeOneAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeOneEmail'); ?>
		<?php echo $form->textField($model,'per_refereeOneEmail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_refereeOneEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeOneMobile'); ?>
		<?php echo $form->textField($model,'per_refereeOneMobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'per_refereeOneMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeTwoName'); ?>
		<?php echo $form->textField($model,'per_refereeTwoName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_refereeTwoName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeTwoOccupation'); ?>
		<?php echo $form->textField($model,'per_refereeTwoOccupation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_refereeTwoOccupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeTwoAddress'); ?>
		<?php echo $form->textField($model,'per_refereeTwoAddress',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_refereeTwoAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeTwoEmail'); ?>
		<?php echo $form->textField($model,'per_refereeTwoEmail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_refereeTwoEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeTwoMobile'); ?>
		<?php echo $form->textField($model,'per_refereeTwoMobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'per_refereeTwoMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_entryDate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
        'attribute'=>'per_entryDate',
        'model'=>$model,
        'options' => array(
                          'mode'=>'focus',
                          'dateFormat'=>'d MM, yy',
                          'showAnim' => 'slideDown',
                          ),
			'htmlOptions'=>array('size'=>30,'class'=>'date'),
		)
		);?>
		<?php echo $form->error($model,'per_entryDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->