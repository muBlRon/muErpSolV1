<?php
/* @var $this AdministrationController */
/* @var $model Administration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($admission); ?>

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
                    <?php echo $form->labelEx($person,'per_title'); ?>
                    <?php echo CHtml::activeDropDownList( $person,'per_title',ZHtml::enumItem($person, 'per_title') ); ?>
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
                    <?php echo ZHtml::enumRadioButtonList($person,'per_gender',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>     
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
                    <?php echo ZHtml::enumRadioButtonList($person, 'per_bloodGroup',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>        
                    <?php echo $form->error($person,'per_bloodGroup'); ?>
            </div>
            <div class="row">
                    <?php echo $form->labelEx($person,'per_nationality'); ?>
                    <?php echo $form->textField($person,'per_nationality'); ?>
                    <?php echo $form->error($person,'per_nationality'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_maritulStatus'); ?>
                    <?php echo ZHtml::enumRadioButtonList( $person,'per_maritulStatus',array('labelOptions'=>array('style'=>'display:inline; padding-right:10px'), 'separator'=>'  ',)); ?>
                    <?php echo $form->error($person,'per_maritulStatus'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($person,'per_husbandsName'); ?>
                    <?php echo $form->textField($person,'per_husbandsName'); ?>
                    <?php echo $form->error($person,'per_husbandsName'); ?>
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
                    <?php echo CHtml::dropDownList('programmeCode','programmeCode', CHtml::listData(Programme::model()->findAll(),
                   'pro_name','pro_name'));?>
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
                            <th><?php echo $form->labelEx($acHistory,'ach_degree'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_group'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_board'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_institution'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_passingYear'); ?></th>
                            <th><?php echo $form->labelEx($acHistory,'ach_result'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo CHtml::dropDownList('ach_degree[1]','',ZHtml::enumItem($acHistory, 'ach_degree'),array('prompt' => '--Select Degree--','value' => '0',)); ?></td>
                        
                            <td><?php echo CHtml::dropDownList('ach_group[1]','',ZHtml::enumItem($acHistory, 'ach_group'),array('prompt' => '--Select Group--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::dropDownList('ach_board[1]','',ZHtml::enumItem($acHistory, 'ach_board'),array('prompt' => '--Select Board--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::textField('ach_institution[1]','',array("style"=>"width:100px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_passingYear[1]','',array("style"=>"width:50px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_result[1]','',array("style"=>"width:50px;")); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::dropDownList('ach_degree[2]','',ZHtml::enumItem($acHistory, 'ach_degree'),array('prompt' => '--Select Degree--','value' => '0',)); ?></td>
                        
                            <td><?php echo CHtml::dropDownList('ach_group[2]','',ZHtml::enumItem($acHistory, 'ach_group'),array('prompt' => '--Select Group--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::dropDownList('ach_board[2]','',ZHtml::enumItem($acHistory, 'ach_board'),array('prompt' => '--Select Board--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::textField('ach_institution[2]','',array("style"=>"width:100px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_passingYear[2]','',array("style"=>"width:50px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_result[2]','',array("style"=>"width:50px;")); ?></td>
                        </tr>       
                               <tr>
                            <td><?php echo CHtml::dropDownList('ach_degree[3]','',ZHtml::enumItem($acHistory, 'ach_degree'),array('prompt' => '--Select Degree--','value' => '0',)); ?></td>
                        
                            <td><?php echo CHtml::dropDownList('ach_group[3]','',ZHtml::enumItem($acHistory, 'ach_group'),array('prompt' => '--Select Group--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::dropDownList('ach_board[3]','',ZHtml::enumItem($acHistory, 'ach_board'),array('prompt' => '--Select Board--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::textField('ach_institution[3]','',array("style"=>"width:100px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_passingYear[3]','',array("style"=>"width:50px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_result[3]','',array("style"=>"width:50px;")); ?></td>
                        </tr>
                               <tr>
                            <td><?php echo CHtml::dropDownList('ach_degree[4]','',ZHtml::enumItem($acHistory, 'ach_degree'),array('prompt' => '--Select Degree--','value' => '0',)); ?></td>
                        
                            <td><?php echo CHtml::dropDownList('ach_group[4]','',ZHtml::enumItem($acHistory, 'ach_group'),array('prompt' => '--Select Group--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::dropDownList('ach_board[4]','',ZHtml::enumItem($acHistory, 'ach_board'),array('prompt' => '--Select Board--','value' => '0',)); ?></td>
                            <td><?php echo CHtml::textField('ach_institution[4]','',array("style"=>"width:100px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_passingYear[4]','',array("style"=>"width:50px;")); ?></td>
                            <td><?php echo CHtml::textField('ach_result[4]','',array("style"=>"width:50px;")); ?></td>
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
                            <th><?php echo $form->labelEx($jobExp,'joe_employeer'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_address'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_contact'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_postion'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_startDate'); ?></th>
                            <th><?php echo $form->labelEx($jobExp,'joe_endDate'); ?></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td><?php echo CHtml::textField('joe_employeer[1]','',array("style"=>"width:150px;")); ?></td>
                            <td><?php echo CHtml::textArea('joe_address[1]','',array('style'=>'width:150px;')); ?></td>
                            <td><?php echo CHtml::textField('joe_contact[1]','',array("style"=>"width:80px;")); ?></td>
                            <td><?php echo CHtml::textField('joe_postion[1]','',array("style"=>"width:100px;")); ?></td>
                            
                             <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                            /*'attribute'=>'per_dateofBirth',
                                            'model'=>$person,*/
                                            'name'=>'joe_startDate[1]',
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date','style'=>'width:50px'),
                                    )
                                    );?>
                             </td>
                             <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                            /*'attribute'=>'per_dateofBirth',
                                            'model'=>$person,*/
                                            'name'=>'joe_endDate[1]',
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date','style'=>'width:50px'),
                                    )
                                    );?>
                             </td>
                        </tr>
                               <tr>
                            
                            <td><?php echo CHtml::textField('joe_employeer[2]','',array("style"=>"width:150px;")); ?></td>
                            <td><?php echo CHtml::textArea('joe_address[2]','',array('style'=>'width:150px;')); ?></td>
                            <td><?php echo CHtml::textField('joe_contact[2]','',array("style"=>"width:80px;")); ?></td>
                            <td><?php echo CHtml::textField('joe_postion[2]','',array("style"=>"width:100px;")); ?></td>
                            
                             <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                            /*'attribute'=>'per_dateofBirth',
                                            'model'=>$person,*/
                                            'name'=>'joe_startDate[2]',
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date','style'=>'width:50px'),
                                    )
                                    );?>
                             </td>
                             <td>
                                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                                    array(
                                            /*'attribute'=>'per_dateofBirth',
                                            'model'=>$person,*/
                                            'name'=>'joe_endDate[2]',
                                            'options' => array(
                                            'mode'=>'focus',
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim' => 'slideDown',
                                            ),
                                            'htmlOptions'=>array('size'=>30,'class'=>'date','style'=>'width:50px'),
                                    )
                                    );?>
                             </td>
                        </tr>
                   
                    </tbody>
                </table>
                
            </div>
            
            
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($admission->isNewRecord ? 'Continue' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->