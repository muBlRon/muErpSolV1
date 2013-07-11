<?php
/* @var $this AdministrationController */
/* @var $model Administration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	

        <div class="title">
            <h3><strong>Programme:</strong> <?php  echo DBhelper::getProgrammeByCode($admission->programmeCode); ?></h3>
            <h3><strong>Batch:</strong> <?php echo $admission->batchName.FormUtil::getBatchNameSufix($admission->batchName); ?>  <strong>Section:</strong> <?php echo $admission->sectionName; ?></h3>
            <h3><strong>Academic Year:</strong> <?php  echo FormUtil::getTerm($student->stu_academicTerm)." ".$student->stu_academicYear;  ?></h3>
            <h2><strong>Student ID:</strong> <?php echo $student->studentID;  ?></h2>
        
        </div>
        <hr/>
        <div id="step1">

            <div class="title">
                <h4>Personal Details</h4>
                
            </div>
            <div class="row">
                <?php echo $form->errorSummary($person); ?>
                  
            </div>
            <div class="row">
                    <?php echo $form->labelEx($person,'per_title'); ?>
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

            <div class="row">
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
                    <?php echo CHtml::checkBox('per_criminalConviction',false); ?>
                    <?php echo $form->error($person,'per_criminalConviction'); ?>
            </div>
            
            <div class="row">
                    <?php echo $form->labelEx($person,'per_convictionDetails'); ?>
                    <?php echo $form->textArea($person,'per_convictionDetails'); ?>
                    <?php echo $form->error($person,'per_convictionDetails'); ?>
            </div>
        
        </div>
        <hr/>
        <div id="step2">
            <div class="title">
                <h4>Other Details</h4>
                
            </div>
            <div class="row">
                <?php echo $form->errorSummary($admission); ?>
                    <?php echo $form->errorSummary($student); ?>
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
        <div id="step3">
            <hr/>
            <div class="title">
                <h4>Academic Details</h4>
                
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th><?php  echo $form->labelEx($acHistory,'ach_degree'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_group'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_board'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_institution'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_passingYear'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_result'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo ZHtml::enumDropDownList('ach_degree[0]',$acHistory->ach_degree[0],$acHistory,array('prompt' => '--Select Degree--','value' => '0',)); ?></td>
                        
                            <td><?php echo ZHtml::enumDropDownList('ach_group[0]',$acHistory->ach_group[0],$acHistory,array('prompt' => '--Select Group--','value' => '0',)); ?></td>
                            <td><?php echo ZHtml::enumDropDownList('ach_board[0]',$acHistory->ach_board[0],$acHistory,array('prompt' => '--Select Board--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::textField('ach_institution[0]',$acHistory->ach_institution[0],array("style"=>"width:100px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_passingYear[0]',$acHistory->ach_passingYear[0],array("style"=>"width:50px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_result[0]',$acHistory->ach_result[0],array("style"=>"width:50px;")); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo ZHtml::enumDropDownList('ach_degree[1]',$acHistory->ach_degree[1],$acHistory,array('prompt' => '--Select Degree--','value' => '0',)); ?></td>
                        
                            <td><?php echo ZHtml::enumDropDownList('ach_group[1]',$acHistory->ach_group[1],$acHistory,array('prompt' => '--Select Group--','value' => '0',)); ?></td>
                            <td><?php echo ZHtml::enumDropDownList('ach_board[1]',$acHistory->ach_board[1],$acHistory,array('prompt' => '--Select Board--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::textField('ach_institution[1]',$acHistory->ach_institution[1],array("style"=>"width:100px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_passingYear[1]',$acHistory->ach_passingYear[1],array("style"=>"width:50px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_result[1]',$acHistory->ach_result[1],array("style"=>"width:50px;")); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo ZHtml::enumDropDownList('ach_degree[2]',$acHistory->ach_degree[2],$acHistory,array('prompt' => '--Select Degree--','value' => '0',)); ?></td>
                        
                            <td><?php echo ZHtml::enumDropDownList('ach_group[2]',$acHistory->ach_group[2],$acHistory,array('prompt' => '--Select Group--','value' => '0',)); ?></td>
                            <td><?php echo ZHtml::enumDropDownList('ach_board[2]',$acHistory->ach_board[2],$acHistory,array('prompt' => '--Select Board--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::textField('ach_institution[2]',$acHistory->ach_institution[2],array("style"=>"width:100px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_passingYear[2]',$acHistory->ach_passingYear[2],array("style"=>"width:50px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_result[2]',$acHistory->ach_result[2],array("style"=>"width:50px;")); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo ZHtml::enumDropDownList('ach_degree[3]',$acHistory->ach_degree[3],$acHistory,array('prompt' => '--Select Degree--','value' => '0',)); ?></td>
                        
                            <td><?php echo ZHtml::enumDropDownList('ach_group[3]',$acHistory->ach_group[3],$acHistory,array('prompt' => '--Select Group--','value' => '0',)); ?></td>
                            <td><?php echo ZHtml::enumDropDownList('ach_board[3]',$acHistory->ach_board[3],$acHistory,array('prompt' => '--Select Board--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::textField('ach_institution[3]',$acHistory->ach_institution[3],array("style"=>"width:100px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_passingYear[3]',$acHistory->ach_passingYear[3],array("style"=>"width:50px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_result[3]',$acHistory->ach_result[3],array("style"=>"width:50px;")); ?></td>
                        </tr>
                        
                    </tbody>
                </table>
                
            </div>
            
            
        </div>
        <div id="step4">
            <hr/>
            <div class="title">
                <h4>Job Experience Details</h4>
                
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th><?php echo $form->labelEx($jobExp,'joe_employer'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_address'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_contact'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_position'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_startDate'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_endDate'); ?></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td><?php echo CHtml::textField('joe_employer[0]',$jobExp->joe_employer[0],array("style"=>"width:150px;")); ?></td>
                            <td><?php echo CHtml::textArea('joe_address[0]',$jobExp->joe_address[0],array('style'=>'width:150px;')); ?></td>
                            <td><?php echo CHtml::textField('joe_contact[0]',$jobExp->joe_contact[0],array("style"=>"width:80px;")); ?></td>
                            <td><?php echo CHtml::textField('joe_postion[0]',$jobExp->joe_position[0],array("style"=>"width:100px;")); ?></td>
                            
                             <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                          
                                            'name'=>'joe_startDate[0]',
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date','style'=>'width:70px'),
                                    )
                                    );?>
                             </td>
                             <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                        
                                            'name'=>'joe_endDate[0]',
                                        
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date','style'=>'width:70px'),
                                    )
                                    );  ?>
                             </td>
                        </tr>
                        
                        <tr>
                            
                            <td><?php echo CHtml::textField('joe_employer[1]',$jobExp->joe_employer[1],array("style"=>"width:150px;")); ?></td>
                            <td><?php echo CHtml::textArea('joe_address[1]',$jobExp->joe_address[1],array('style'=>'width:150px;')); ?></td>
                            <td><?php echo CHtml::textField('joe_contact[1]',$jobExp->joe_contact[1],array("style"=>"width:80px;")); ?></td>
                            <td><?php echo CHtml::textField('joe_postion[1]',$jobExp->joe_position[1],array("style"=>"width:100px;")); ?></td>
                            
                             <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                          
                                            'name'=>'joe_startDate[1]',
                                            
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date','style'=>'width:70px'),
                                    )
                                    );?>
                             </td>
                             <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                        
                                            'name'=>'joe_endDate[1]',
                                        
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date','style'=>'width:70px'),
                                    )
                                    );  ?>
                             </td>
                        </tr>       
                   
                    </tbody>
                </table>
                
            </div>
            
            
        </div>
	<div class="row buttons">
		
            <?php echo CHtml::ajaxSubmitButton('submit', $this->createUrl('create'), array('update'=>'#form'));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->