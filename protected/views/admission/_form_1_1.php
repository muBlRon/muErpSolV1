<?php
/* @var $this AdministrationController */
/* @var $model Administration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-form1',
	'enableAjaxValidation'=>true,
        'action'=>CController::createUrl('admin'),
)); ?>





        
	<div class="row">
		
            	<?php echo CHtml::dropDownList('sectionName','sectionName', CHtml::listData($data,
                   'sec','sectionName','group'),array(
                    'prompt' => '--Select Batch First--',
                        'value' => '0',
                       'required'=>true,
                       'style'=>'text-align:left;',
                    /*'ajax' => array(
                    'type'=>'POST', //request type
                    'url'=>CController::createUrl('admission/create'), //url to call.
                    //Style: CController::createUrl('currentController/methodToCall')
                    'update'=>'#form', //selector to update
                    //'data'=>'js: $(this).val()' 
                    //leave out the data key to pass all form values through
                    )*/ ));?>
	</div>
        <div class="row">
           <?php  //echo TbHtml::button('Submit', array('color' => TbHtml::BUTTON_COLOR_SUCCESS, 'size' => TbHtml::BUTTON_SIZE_LARGE, 'submit' => array('create',))); 
            echo TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_SUCCESS, 'size' => TbHtml::BUTTON_SIZE_LARGE, 'url'=>CController::createUrl('admission/create')));
           ?>
        </div>
        
        
<?php $this->endWidget(); ?>

</div><!-- form -->