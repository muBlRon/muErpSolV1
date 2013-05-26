<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'personID'); ?>
		<?php echo $form->textField($model,'personID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_title'); ?>
		<?php echo $form->textField($model,'per_title',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_firstName'); ?>
		<?php echo $form->textField($model,'per_firstName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_lastName'); ?>
		<?php echo $form->textField($model,'per_lastName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_gender'); ?>
		<?php echo $form->textField($model,'per_gender',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_dateofBirth'); ?>
		<?php echo $form->textField($model,'per_dateofBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_bloodGroup'); ?>
		<?php echo $form->textField($model,'per_bloodGroup',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_nationality'); ?>
		<?php echo $form->textField($model,'per_nationality',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_fathersName'); ?>
		<?php echo $form->textField($model,'per_fathersName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_mothersName'); ?>
		<?php echo $form->textField($model,'per_mothersName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_husbandsName'); ?>
		<?php echo $form->textField($model,'per_husbandsName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_parmanentAddress'); ?>
		<?php echo $form->textField($model,'per_parmanentAddress',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_postCode'); ?>
		<?php echo $form->textField($model,'per_postCode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_telephone'); ?>
		<?php echo $form->textField($model,'per_telephone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_mobile'); ?>
		<?php echo $form->textField($model,'per_mobile',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_email'); ?>
		<?php echo $form->textField($model,'per_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_presentAddress'); ?>
		<?php echo $form->textField($model,'per_presentAddress',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_maritulStatus'); ?>
		<?php echo $form->textField($model,'per_maritulStatus',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_englishLanguageProficiency'); ?>
		<?php echo $form->textField($model,'per_englishLanguageProficiency',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_computerLiteracy'); ?>
		<?php echo $form->textField($model,'per_computerLiteracy',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_otherActivities'); ?>
		<?php echo $form->textField($model,'per_otherActivities',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_personalStatment'); ?>
		<?php echo $form->textArea($model,'per_personalStatment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_criminalConviction'); ?>
		<?php echo $form->textField($model,'per_criminalConviction'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_convictionDetails'); ?>
		<?php echo $form->textArea($model,'per_convictionDetails',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeOneName'); ?>
		<?php echo $form->textField($model,'per_refereeOneName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeOneOccupation'); ?>
		<?php echo $form->textField($model,'per_refereeOneOccupation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeOneAddress'); ?>
		<?php echo $form->textField($model,'per_refereeOneAddress',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeOneEmail'); ?>
		<?php echo $form->textField($model,'per_refereeOneEmail',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeOneMobile'); ?>
		<?php echo $form->textField($model,'per_refereeOneMobile',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeTwoName'); ?>
		<?php echo $form->textField($model,'per_refereeTwoName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeTwoOccupation'); ?>
		<?php echo $form->textField($model,'per_refereeTwoOccupation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeTwoAddress'); ?>
		<?php echo $form->textField($model,'per_refereeTwoAddress',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeTwoEmail'); ?>
		<?php echo $form->textField($model,'per_refereeTwoEmail',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_refereeTwoMobile'); ?>
		<?php echo $form->textField($model,'per_refereeTwoMobile',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_entryDate'); ?>
		<?php echo $form->textField($model,'per_entryDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->