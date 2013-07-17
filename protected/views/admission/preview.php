<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Admission'=>array('index'),
	'Create',
);


?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation'=>false,
)); ?>


<div id="form">
    <h3>Student Admission</h3>
    <div class="title">
        <h4><strong>Programme:</strong> <?php  echo DBhelper::getProgrammeByCode($admission->programmeCode); ?></h4>
            <h4><strong>Batch:</strong> <?php echo $admission->batchName.FormUtil::getBatchNameSufix($admission->batchName); ?>  <strong>Section:</strong><span> <?php echo $admission->sectionName; ?></h4>
            <h4><strong>Academic Year:</strong><?php  echo FormUtil::getTerm($student->stu_academicTerm)." ".$student->stu_academicYear;  ?></h4>
            <h3><strong>Student ID:</strong><?php echo $student->studentID;  ?></h3>
        
    </div>
   
    <div id="step1" class="preview">
             <hr/>
                <h3>Personal Details</h3>
                
                <strong>Student Name: </strong><span ><?php  echo CHtml::encode($person->per_title)." ".CHtml::encode($person->per_firstName)." ".CHtml::encode($person->per_lastName); ?>                   <?php echo $form->hiddenField( $person,'per_title',''); ?></span>

                    <?php echo $form->hiddenField($person,'per_title'); ?>
                    <?php echo $form->hiddenField($person,'per_firstName'); ?>
                    <?php echo $form->hiddenField($person,'per_lastName'); ?>

            

                    <strong>Fathers Name: </strong><span><?php echo CHtml::encode($person->per_fathersName); ?></span>
                    <?php echo $form->hiddenField($person,'per_fathersName'); ?>





                    <strong>Mothers Name: </strong><span><?php echo CHtml::encode($person->per_mothersName); ?></span>
                    <?php echo $form->hiddenField($person,'per_mothersName'); ?>




                    <strong>Gender: </strong><span><?php echo CHtml::encode($person->per_gender); ?></span>
                    <?php echo $form->hiddenField($person,'per_gender',''); ?>     


                    <strong>Date of Birth: </strong><span><?php echo CHtml::encode($person->per_dateofBirth); ?></span>
                    <?php echo $form->hiddenField($person,'per_dateofBirth'); ?>


                    <strong>Blood Group: </strong><span><?php echo CHtml::encode($person->per_bloodGroup); ?></span>
                    <?php echo $form->hiddenField($person, 'per_bloodGroup',''); ?>        


                    <strong>Nationality: </strong><span><?php echo CHtml::encode($person->per_nationality); ?></span>
                    <?php echo $form->hiddenField($person,'per_nationality',''); ?>


                    <strong>Marital Status : </strong><span><?php echo CHtml::encode($person->per_maritulStatus); ?></span>
                    <?php echo $form->hiddenField( $person,'per_maritulStatus',''); ?>


                    <strong>Spouse Name: </strong><span><?php echo CHtml::encode($person->per_spouseName); ?></span>
                    <?php echo $form->hiddenField($person,'per_spouseName',''); ?>


                    <strong>Present Address: </strong><span><?php echo CHtml::encode($person->per_presentAddress); ?></span>
                    <?php echo $form->hiddenField($person,'per_presentAddress',''); ?>


                    <strong>Permanent Address: </strong><span><?php echo CHtml::encode($person->per_parmanentAddress); ?></span>
                    <?php echo $form->hiddenField($person,'per_parmanentAddress',''); ?>


                    <strong>Post Code: </strong><span><?php echo CHtml::encode($person->per_postCode); ?></span>
                    <?php echo $form->hiddenField($person,'per_postCode',''); ?>


                    <strong>Mobile: </strong><span><?php echo CHtml::encode($person->per_mobile); ?></span>
                    <?php echo $form->hiddenField($person,'per_mobile',''); ?>


                    <strong>Email: </strong><span><?php echo CHtml::encode($person->per_email); ?></span>
                    <?php echo $form->hiddenField($person,'per_email',''); ?>


                    <strong>Telephone: </strong><span><?php echo CHtml::encode($person->per_telephone); ?></span>
                    <?php echo $form->hiddenField($person,'per_telephone',''); ?>


                    <strong>Criminal Conviction: </strong><span><?php echo CHtml::encode($person->per_criminalConviction); ?></span>
                    <?php echo $form->hiddenField($person,'per_criminalConviction',''); ?>


                    <strong>Conviction Details: </strong><span><?php echo CHtml::encode($person->per_convictionDetails); ?></span>
                    <?php echo $form->hiddenField($person,'per_convictionDetails',''); ?>


        
        </div>
    
        <div id="step2" class="preview">
            <hr/>
            <h3>Other Details</h3>
                
            
                    <strong>Admission Date: </strong><span><?php echo CHtml::encode($admission->adm_date); ?></span>
                    <?php echo $form->hiddenField($admission,'adm_date',''); ?>
                    <?php //echo $form->error($admission,'adm_date'); ?>
            
                    <strong>Guardians Name: </strong><span><?php echo CHtml::encode($student->stu_guardiansName); ?></span>
                    <?php echo $form->hiddenField($student,'stu_guardiansName'); ?>
                    <?php //echo $form->error($student,'stu_guardiansName'); ?>
            
                    <strong>Guardians Address: </strong><span><?php echo CHtml::encode($student->stu_guardiansAddress); ?></span>
                    <?php echo $form->hiddenField($student,'stu_guardiansAddress'); ?>
                    <?php ///echo $form->error($student,'stu_guardiansAddress'); ?>
            
                    <strong>Guardians Mobile: </strong><span><?php echo CHtml::encode($student->stu_guardiansMobile); ?></span>
                    <?php echo $form->hiddenField($student,'stu_guardiansMobile'); ?>
                    <?php //echo $form->error($student,'stu_guardiansMobile'); ?>
            
                    <strong>Conditions: </strong><span><?php echo CHtml::encode($student->stu_conditions); ?></span>
                    <?php echo $form->hiddenField($student,'stu_conditions'); ?>
                    <?php //echo $form->error($student,'stu_conditions'); ?>
            
                    <strong>Previous ID: </strong><span><?php echo CHtml::encode($student->stu_previousID); ?></span>
                    <?php echo $form->hiddenField($student,'stu_previousID'); ?>
                    <?php //echo $form->error($student,'stu_previousID'); ?>
            
                    <strong>Previous Degree: </strong><span><?php echo CHtml::encode($student->stu_previousDegree); ?></span>
                    <?php echo $form->hiddenField($student,'stu_previousDegree','');?>
                    <?php //echo $form->error($student,'stu_previousDegree'); ?>
            
        </div>
    
    
    <div id="step3">
            
    <hr/>        
                <h4>Academic Details</h4>
                
            
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Degree</th>
                            <th>Group</th>
                            <th>Board</th>
                            <th>Institution</th>
                            <th>Passing Year</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo CHtml::encode($acHistory->ach_degree[0]); CHtml::hiddenField('ach_degree[0]',$acHistory->ach_degree[0]); ?></td>
                        
                            <td><?php echo CHtml::encode($acHistory->ach_group[0]); CHtml::hiddenField('ach_group[0]',$acHistory->ach_group[0]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_board[0]); CHtml::hiddenField('ach_board[0]',$acHistory->ach_board[0]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_institution[0]); CHtml::hiddenField('ach_institution[0]',$acHistory->ach_institution[0]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_passingYear[0]); CHtml::hiddenField('ach_passingYear[0]',$acHistory->ach_passingYear[0]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_result[0]); CHtml::hiddenField('ach_result[0]',$acHistory->ach_result[0]); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::encode($acHistory->ach_degree[1]); CHtml::hiddenField('ach_degree[0]',$acHistory->ach_degree[1]); ?></td>
                        
                            <td><?php echo CHtml::encode($acHistory->ach_group[1]); CHtml::hiddenField('ach_group[0]',$acHistory->ach_group[1]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_board[1]); CHtml::hiddenField('ach_board[0]',$acHistory->ach_board[1]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_institution[1]); CHtml::hiddenField('ach_institution[0]',$acHistory->ach_institution[1]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_passingYear[1]); CHtml::hiddenField('ach_passingYear[0]',$acHistory->ach_passingYear[1]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_result[1]); CHtml::hiddenField('ach_result[0]',$acHistory->ach_result[1]); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::encode($acHistory->ach_degree[2]); CHtml::hiddenField('ach_degree[0]',$acHistory->ach_degree[2]); ?></td>
                        
                            <td><?php echo CHtml::encode($acHistory->ach_group[2]); CHtml::hiddenField('ach_group[0]',$acHistory->ach_group[2]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_board[2]); CHtml::hiddenField('ach_board[0]',$acHistory->ach_board[2]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_institution[2]); CHtml::hiddenField('ach_institution[0]',$acHistory->ach_institution[2]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_passingYear[2]); CHtml::hiddenField('ach_passingYear[0]',$acHistory->ach_passingYear[2]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_result[2]); CHtml::hiddenField('ach_result[0]',$acHistory->ach_result[2]); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::encode($acHistory->ach_degree[3]); CHtml::hiddenField('ach_degree[0]',$acHistory->ach_degree[3]); ?></td>
                        
                            <td><?php echo CHtml::encode($acHistory->ach_group[3]); CHtml::hiddenField('ach_group[0]',$acHistory->ach_group[3]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_board[3]); CHtml::hiddenField('ach_board[0]',$acHistory->ach_board[3]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_institution[3]); CHtml::hiddenField('ach_institution[0]',$acHistory->ach_institution[3]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_passingYear[3]); CHtml::hiddenField('ach_passingYear[0]',$acHistory->ach_passingYear[3]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_result[3]); CHtml::hiddenField('ach_result[0]',$acHistory->ach_result[3]); ?></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            
            
        </div>
    <div id="step4">
            <hr/>
            
                <h3>Job Experience Details</h3>
                
            
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Employer</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Position</th>
                            <th>Joining Date</th>
                            <th>Leave Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td><?php echo CHtml::encode($jobExp->joe_employer[0]); CHtml::hiddenField('joe_employer[0]',$jobExp->joe_employer[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_address[0]); CHtml::hiddenField('joe_address[0]',$jobExp->joe_address[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_contact[0]); CHtml::hiddenField('joe_contact[0]',$jobExp->joe_contact[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_position[0]); CHtml::hiddenField('joe_position[0]',$jobExp->joe_position[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_startDate[0]); CHtml::hiddenField('joe_startDate[0]',$jobExp->joe_startDate[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_endDate[0]); CHtml::hiddenField('joe_endDate[0]',$jobExp->joe_endDate[0]); ?></td>
                             
                        </tr>
                        <tr>
                            
                            <td><?php echo CHtml::encode($jobExp->joe_employer[1]); CHtml::hiddenField('joe_employer[0]',$jobExp->joe_employer[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_address[1]); CHtml::hiddenField('joe_address[0]',$jobExp->joe_address[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_contact[1]); CHtml::hiddenField('joe_contact[0]',$jobExp->joe_contact[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_position[1]); CHtml::hiddenField('joe_position[0]',$jobExp->joe_position[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_startDate[1]); CHtml::hiddenField('joe_startDate[0]',$jobExp->joe_startDate[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_endDate[1]); CHtml::hiddenField('joe_endDate[0]',$jobExp->joe_endDate[1]); ?></td>
                             
                        </tr>
                               
                   
                    </tbody>
                </table>
                
            </div>
            
            
        </div>
    	<div class="row buttons">
		
            <?php 
              
              echo TbHtml::submitButton('Back', array('color' => TbHtml::BUTTON_COLOR_DANGER, 'size' => TbHtml::BUTTON_SIZE_LARGE));
            echo TbHtml::button('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE, 'submit' => array('create', 'preview'=>0)));
            
            ?>
            
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
