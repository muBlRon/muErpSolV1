<?php
/* @var $this AdministrationController */
/* @var $model Administration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-update',
	'enableAjaxValidation'=>false,
        'enableClientValidation'=>true,
    
)); ?>

	

	

        
        <div id="step1">
            
            <div class="title">
                <h4>Personal Details</h4>
                
            </div>
            <p class="note">Fields with <span class="required">*</span> are required.</p>
            <div class="row">
                <?php //echo $form->errorSummary($person);?>
                
            </div>
            <div class="row">
                    <?php  echo $form->labelEx($person,'per_title'); ?>
                    <?php echo ZHtml::enumActiveDropDownList( $person,'per_title',''); ?>
                    <?php echo $form->error($person,'per_title'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_firstName'); ?>
                    <?php echo $form->textField($person,'per_firstName'); ?>
                    <?php echo $form->error($person,'per_firstName'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_lastName'); ?>
                    <?php echo $form->textField($person,'per_lastName'); ?>
                    <?php echo $form->error($person,'per_lastName'); ?>
            </div>
<div class="row">
                    <?php echo $form->labelEx($person,'per_fathersName'); ?>
                    <?php echo $form->textField($person,'per_fathersName'); ?>
                    <?php echo $form->error($person,'per_fathersName'); ?>
            </div>


             <div class="row">
                    <?php echo $form->labelEx($person,'per_mothersName'); ?>
                    <?php echo $form->textField($person,'per_mothersName'); ?>
                    <?php echo $form->error($person,'per_mothersName'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_gender'); ?>
                    <?php echo ZHtml::enumActiveRadioButtonList($person,'per_gender',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>     
                    <?php echo $form->error($person,'per_gender'); ?>
            </div>
            <div class="row">
                    <?php echo $form->labelEx($person,'per_dateofBirth'); ?>

                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                            'attribute'=>'per_dateofBirth',
                                            'model'=>$person,
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date'),
                    )
                    );?>

                    <?php //echo $form->textField($persons,'per_dateofBirth'); ?>
                    <?php echo $form->error($person,'per_dateofBirth'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_bloodGroup'); ?>
                    <?php echo ZHtml::enumActiveRadioButtonList($person, 'per_bloodGroup',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>        
                    <?php echo $form->error($person,'per_bloodGroup'); ?>
            </div>
            <div class="row">
                    <?php echo $form->labelEx($person,'per_nationality'); ?>
                    <?php echo $form->textField($person,'per_nationality'); ?>
                    <?php echo $form->error($person,'per_nationality'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_maritulStatus'); ?>
                    <?php echo ZHtml::enumActiveRadioButtonList( $person,'per_maritulStatus',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>
                    <?php echo $form->error($person,'per_maritulStatus'); ?>
            </div>

            <div id="maritulStatus" class="row" style="<?php echo ($person->per_maritulStatus=='married'?'display:inline':'display:none');  ?>">
                    <?php echo $form->labelEx($person,'per_spouseName'); ?>
                    <?php echo $form->textField($person,'per_spouseName'); ?>
                    <?php echo $form->error($person,'per_spouseName'); ?>
            </div>

            


            <div class="row">
                    <?php echo $form->labelEx($person,'per_presentAddress'); ?>
                    <?php echo $form->textArea($person,'per_presentAddress'); ?>
                    <?php echo $form->error($person,'per_presentAddress'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_parmanentAddress'); ?>
                    <?php echo $form->textArea($person,'per_parmanentAddress'); ?>
                    <?php echo $form->error($person,'per_parmanentAddress'); ?>
            </div>


            <div class="row">
                    <?php echo $form->labelEx($person,'per_postCode'); ?>
                    <?php echo $form->textField($person,'per_postCode'); ?>
                    <?php echo $form->error($person,'per_postCode'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_mobile'); ?>
                    <?php echo $form->textField($person,'per_mobile'); ?>
                    <?php echo $form->error($person,'per_mobile'); ?>
            </div>

             <div class="row">
                    <?php echo $form->labelEx($person,'per_email'); ?>
                    <?php echo $form->textField($person,'per_email'); ?>
                    <?php echo $form->error($person,'per_email'); ?>
            </div>

             <div class="row">
                    <?php echo $form->labelEx($person,'per_telephone'); ?>
                    <?php echo $form->textField($person,'per_telephone'); ?>
                    <?php echo $form->error($person,'per_telephone'); ?>
            </div> 
            
   
            <div class="row">
                    <?php echo $form->labelEx($person,'per_criminalConviction'); ?>
                    <?php echo $form->checkBox($person,'per_criminalConviction', array('value'=>1, 'uncheckValue'=>0)); ?>
                    <?php echo $form->error($person,'per_criminalConviction'); ?>
            </div>
            
            <div id="crimiCon" class="row" style="<?php echo ($person->per_criminalConviction==1?'display:inline':'display:none');  ?>">
                    <?php echo $form->labelEx($person,'per_convictionDetails'); ?>
                    <?php echo $form->textArea($person,'per_convictionDetails'); ?>
                    <?php echo $form->error($person,'per_convictionDetails');  ?>
            </div>
        
        </div>
        <hr/>
        <div id="step2">
            <div class="title">
                <h4>Other Details</h4>
                
            </div>
            <div class="row">
                <?php  //echo $form->errorSummary($admission); ?>
                    <?php //echo $form->errorSummary($student); ?>
            </div>
            <div class="row">
                    <?php echo $form->labelEx($admission,'adm_date'); ?>
                    <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                            'attribute'=>'adm_date',
                                            'model'=>$admission,
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date'),
                    )
                    );?>
                    <?php echo $form->error($admission,'adm_date'); ?>
            </div>
            <div class="row">
                    <?php echo $form->labelEx($student,'stu_guardiansName'); ?>
                    <?php echo $form->textField($student,'stu_guardiansName'); ?>
                    <?php echo $form->error($student,'stu_guardiansName'); ?>
            </div>
            <div class="row">
                    <?php echo $form->labelEx($student,'stu_guardiansAddress'); ?>
                    <?php echo $form->textArea($student,'stu_guardiansAddress'); ?>
                    <?php echo $form->error($student,'stu_guardiansAddress'); ?>
            </div>
            <div class="row">
                    <?php echo $form->labelEx($student,'stu_guardiansMobile'); ?>
                    <?php echo $form->textField($student,'stu_guardiansMobile'); ?>
                    <?php echo $form->error($student,'stu_guardiansMobile'); ?>
            </div>
            <div class="row">
                    <?php echo $form->labelEx($student,'stu_conditions'); ?>
                    <?php echo $form->textArea($student,'stu_conditions'); ?>
                    <?php echo $form->error($student,'stu_conditions'); ?>
            </div>
            <div class="row">
                <strong><?php echo CHtml::encode("Achived any previous degree form this University"); ?></strong><br/>
                    <?php echo CHtml::checkBox('HasPreDegree',$_REQUEST['HasPreDegree']); ?>
                    
            </div>
            <div id="preDegree" style="<?php echo ($_REQUEST['HasPreDegree']==1?'display:inline':'display:none');  ?>">
                <div class="row">
                        <?php echo $form->labelEx($student,'stu_previousID'); ?>
                        <?php echo $form->textField($student,'stu_previousID'); ?>
                        <?php echo $form->error($student,'stu_previousID'); ?>
                </div>
                <div class="row">
                        <?php echo $form->labelEx($student,'stu_previousDegree'); ?>
                        <?php echo $form->dropDownList($student,'stu_previousDegree', CHtml::listData(Programme::model()->findAll(),
                       'pro_name','pro_name'),array('prompt' => '--Select Degree--','value' => '0',));?>
                        <?php echo $form->error($student,'stu_previousDegree'); ?>
                </div>
            </div>
        </div>
        <hr/>
       
	<div class="row buttons">
		
            <?php 
       echo CHtml::hiddenField('test', 12);
            echo CHtml::submitButton('Update', array('class' => 'btn btn-primary btn-large','data-loading-text'=>'Loading....'));
            
            ?>
            	
	</div>

<?php $this->endWidget(); ?>
<script type="text/javascript">
    
    
    //---------------
    $( "#Person_per_criminalConviction").on( "click", function()
    {
        
        
    if ( $(this).prop('checked') ){
        $("#crimiCon").show('slow');
        $("#Person_per_convictionDetails").attr('required',true);
    }
    else 
        {
            $("#crimiCon").hide('slow');
            $("#Person_per_convictionDetails").attr('required',false);
            $("#Person_per_convictionDetails").val('');
        }
        

    } );
    
    //---------------------//
    $( "#HasPreDegree").on( "click", function()
    {
        
        
        if ( $(this).prop('checked') ){
            $("#preDegree").show('slow');
            $("#Student_stu_previousID").attr('required',true);
            $("#Student_stu_previousDegree").attr('required',true);
        }
        else 
        {
            $("#preDegree").hide('slow');
            $("#Student_stu_previousID").attr('required',false);
            $("#Student_stu_previousID").val('');
            $("#Student_stu_previousDegree").attr('required',false);
            $("#Student_stu_previousDegree").val('');
        }
        

    } );
    
    //---------------
    $( "input[type='radio']").on( "click", function()
    {
        
        
    if ( $(this).attr('value')=='married' ){//alert('dd');
        $("#maritulStatus").show('slow');
        $("#Person_per_spouseName").attr('required',true);
    }
    else 
        {
            $("#maritulStatus").hide('slow');
            $("Person_per_spouseName").attr('required',false);
            $("#Person_per_spouseName").val('');
        }
        

    } );
    
    </script>
</div><!-- form -->