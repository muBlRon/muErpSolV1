
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-form3',
	'enableAjaxValidation'=>false,
        'enableClientValidation'=>false,
)); 

echo "--:".$_REQUEST['HasPreDegree'];

?>
 

<div id="form">

    <div class="preview">
            <span class="label label-info">Preview</span>
        <h4><strong>Programme: </strong> <?php  echo DBhelper::getProgrammeByCode($admission->programmeCode); ?></h4>
        <h4><strong>Batch: </strong><span class="label label-success"> <?php echo $admission->batchName.FormUtil::getBatchNameSufix($admission->batchName); ?>  </span><strong>Section: </strong><span class="label label-important"> <?php echo $admission->sectionName; ?></span></h4>
            <h4><strong>Academic Year: </strong><span class="label label-info"><?php  echo FormUtil::getTerm($student->stu_academicTerm)." ".$student->stu_academicYear;  ?></span></h4>
            <h3><strong>Student ID: </strong><span class="label label-warning"><?php echo $student->studentID;  ?></span></h3>
        
    </div>
   
    <div id="step1" class="preview">
             <hr/>
                <h3>Personal Details</h3>
                
                <strong>Student Name: </strong><span class="label label-warning"><?php  echo CHtml::encode($person->per_title)." ".CHtml::encode($person->per_firstName)." ".CHtml::encode($person->per_lastName); ?>                   <?php echo $form->hiddenField( $person,'per_title',''); ?></span>

                    <?php echo $form->hiddenField($person,'per_title'); ?>
                    <?php echo $form->hiddenField($person,'per_firstName'); ?>
                    <?php echo $form->hiddenField($person,'per_lastName'); ?>
                    <strong>Gender: </strong><span class="label label-info"><?php echo CHtml::encode($person->per_gender); ?></span>
                    <?php echo $form->hiddenField($person,'per_gender',''); ?>     
<br/>
            

                    <strong>Fathers Name: </strong><span class="label label-info"><?php echo CHtml::encode($person->per_fathersName); ?></span>
                    <?php echo $form->hiddenField($person,'per_fathersName'); ?>





                    <strong>Mothers Name: </strong><span class="label label-info"><?php echo CHtml::encode($person->per_mothersName); ?></span>
                    <?php echo $form->hiddenField($person,'per_mothersName'); ?>


<br/>

     


                    <strong>Date of Birth: </strong><span class="label label-success"><?php echo CHtml::encode($person->per_dateofBirth); ?></span>
                    <?php echo $form->hiddenField($person,'per_dateofBirth'); ?>


                    <strong>Blood Group: </strong><span class="label label-important"><?php echo CHtml::encode($person->per_bloodGroup); ?></span>
                    <?php echo $form->hiddenField($person, 'per_bloodGroup',''); ?>        


                    <strong>Nationality: </strong><span class="label label-info"><?php echo CHtml::encode($person->per_nationality); ?></span>
                    <?php echo $form->hiddenField($person,'per_nationality',''); ?>

<br/>
                    <strong>Marital Status : </strong><span class="label label-info"><?php echo CHtml::encode($person->per_maritulStatus); ?></span>
                    <?php echo $form->hiddenField( $person,'per_maritulStatus',''); ?>


                    <strong>Spouse Name: </strong><span class="label label-info"> <?php echo CHtml::encode($person->per_spouseName!=null? $person->per_spouseName : "-- N/A --");  ?></span>
                    <?php echo $form->hiddenField($person,'per_spouseName',''); ?>

<br/>
                    <strong>Present Address: </strong><div class="areaBox"><?php echo CHtml::encode($person->per_presentAddress); ?></div>
                    <?php echo $form->hiddenField($person,'per_presentAddress',''); ?>

<br/>
                    <strong>Permanent Address: </strong><div class="areaBox"><?php echo CHtml::encode($person->per_parmanentAddress); ?></div>
                    <?php echo $form->hiddenField($person,'per_parmanentAddress',''); ?>

<br/>
                    <strong>Post Code: </strong><span class="label label-info"><?php echo CHtml::encode($person->per_postCode); ?></span>
                    <?php echo $form->hiddenField($person,'per_postCode',''); ?>


                  


                    <strong>Email: </strong><span class="label label-warning"><?php echo CHtml::encode($person->per_email!=null? $person->per_email : "-- N/A --"); ?></span>
                    <?php echo $form->hiddenField($person,'per_email',''); ?>
<br/>
                      <strong>Mobile: </strong><span class="label label-warning"><?php echo CHtml::encode($person->per_mobile); ?></span>
                    <?php echo $form->hiddenField($person,'per_mobile',''); ?>

                    <strong>Telephone: </strong><span class="label label-success"><?php echo CHtml::encode($person->per_telephone!=null? $person->per_telephone : "-- N/A --"); ?></span>
                    <?php echo $form->hiddenField($person,'per_telephone',''); ?>

<br/>
                    <strong>Criminal Conviction: </strong><span class="label label-important"><?php  echo CHtml::encode($person->per_criminalConviction==1? "YES" : "-- N/A --"); ?></span>
                    <?php echo $form->hiddenField($person,'per_criminalConviction',''); ?>


                    <strong>Conviction Details: </strong><div class="areaBox "><?php  echo CHtml::encode($person->per_convictionDetails!=null? $person->per_convictionDetails : "-- N/A --"); ?></div>
                    <?php echo $form->hiddenField($person,'per_convictionDetails',''); ?>


        
        </div>
    
        <div id="step2" class="preview">
            <hr/>
            <h3>Other Details</h3>
                
            
                    <strong>Admission Date: </strong><span class="label label-important"><?php echo CHtml::encode($admission->adm_date); ?></span>
                    <?php echo $form->hiddenField($admission,'adm_date',''); ?>
                    <?php //echo $form->error($admission,'adm_date'); ?>
           <br/> 
                    <strong>Guardians Name: </strong><span class="label label-success"><?php echo CHtml::encode($student->stu_guardiansName); ?></span>
                    <?php echo $form->hiddenField($student,'stu_guardiansName'); ?>
                    <?php //echo $form->error($student,'stu_guardiansName'); ?>
                    <strong>Guardians Mobile: </strong><span class="label label-warning"><?php echo CHtml::encode($student->stu_guardiansMobile); ?></span>
                    <?php echo $form->hiddenField($student,'stu_guardiansMobile'); ?>
                    <?php //echo $form->error($student,'stu_guardiansMobile'); ?>
            <br/>
                    <strong>Guardians Address: </strong><div class="areaBox"><?php echo CHtml::encode($student->stu_guardiansAddress); ?></div>
                    <?php echo $form->hiddenField($student,'stu_guardiansAddress'); ?>
                    <?php ///echo $form->error($student,'stu_guardiansAddress'); ?>
            
                
            <br/>
                    <strong>Conditions: </strong><div class="areaBox"><?php  echo CHtml::encode($student->stu_conditions!=null? $student->stu_conditions : "-- N/A --"); ?></div>
                    <?php echo $form->hiddenField($student,'stu_conditions'); ?>
                    <?php //echo $form->error($student,'stu_conditions'); ?>
            <br/>
                    <strong>Previous ID: </strong><span class="label label-success"><?php echo CHtml::encode($student->stu_previousID!=null? $student->stu_previousID : "-- N/A --"); ?></span>
                    <?php echo $form->hiddenField($student,'stu_previousID'); ?>
                    <?php //echo $form->error($student,'stu_previousID'); ?>
            
                    <strong>Previous Degree: </strong><span class="label label-info"><?php echo CHtml::encode($student->stu_previousDegree!=null? $student->stu_previousDegree : "-- N/A --"); ?></span>
                    <?php echo $form->hiddenField($student,'stu_previousDegree','');?>
                    <?php //echo $form->error($student,'stu_previousDegree'); ?>
            
        </div>
    
    
    <div id="step3">
            
    <hr/>        
                <h4>Academic Details</h4>
                
            
            <div>
                <table class="table table-striped">
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
                            <td><?php echo CHtml::encode($acHistory->ach_degree[0]); echo CHtml::hiddenField('ach_degree[0]',$acHistory->ach_degree[0]); ?></td>
                        
                            <td><?php echo CHtml::encode($acHistory->ach_group[0]); echo CHtml::hiddenField('ach_group[0]',$acHistory->ach_group[0]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_board[0]); echo CHtml::hiddenField('ach_board[0]',$acHistory->ach_board[0]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_institution[0]); echo CHtml::hiddenField('ach_institution[0]',$acHistory->ach_institution[0]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_passingYear[0]); echo CHtml::hiddenField('ach_passingYear[0]',$acHistory->ach_passingYear[0]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_result[0]); echo CHtml::hiddenField('ach_result[0]',$acHistory->ach_result[0]); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::encode($acHistory->ach_degree[1]); echo CHtml::hiddenField('ach_degree[1]',$acHistory->ach_degree[1]); ?></td>
                        
                            <td><?php echo CHtml::encode($acHistory->ach_group[1]); echo CHtml::hiddenField('ach_group[1]',$acHistory->ach_group[1]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_board[1]); echo CHtml::hiddenField('ach_board[1]',$acHistory->ach_board[1]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_institution[1]); echo CHtml::hiddenField('ach_institution[1]',$acHistory->ach_institution[1]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_passingYear[1]); echo CHtml::hiddenField('ach_passingYear[1]',$acHistory->ach_passingYear[1]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_result[1]); echo CHtml::hiddenField('ach_result[1]',$acHistory->ach_result[1]); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::encode($acHistory->ach_degree[2]); echo CHtml::hiddenField('ach_degree[2]',$acHistory->ach_degree[2]); ?></td>
                        
                            <td><?php echo CHtml::encode($acHistory->ach_group[2]); echo CHtml::hiddenField('ach_group[2]',$acHistory->ach_group[2]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_board[2]); echo CHtml::hiddenField('ach_board[2]',$acHistory->ach_board[2]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_institution[2]); echo CHtml::hiddenField('ach_institution[2]',$acHistory->ach_institution[2]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_passingYear[2]); echo CHtml::hiddenField('ach_passingYear[2]',$acHistory->ach_passingYear[2]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_result[2]); echo CHtml::hiddenField('ach_result[2]',$acHistory->ach_result[2]); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::encode($acHistory->ach_degree[3]); echo CHtml::hiddenField('ach_degree[3]',$acHistory->ach_degree[3]); ?></td>
                        
                            <td><?php echo CHtml::encode($acHistory->ach_group[3]); echo CHtml::hiddenField('ach_group[3]',$acHistory->ach_group[3]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_board[3]); echo CHtml::hiddenField('ach_board[3]',$acHistory->ach_board[3]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_institution[3]); echo CHtml::hiddenField('ach_institution[3]',$acHistory->ach_institution[3]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_passingYear[3]); echo CHtml::hiddenField('ach_passingYear[3]',$acHistory->ach_passingYear[3]); ?></td>
                            <td><?php echo CHtml::encode($acHistory->ach_result[3]); echo CHtml::hiddenField('ach_result[3]',$acHistory->ach_result[3]); ?></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            
            
        </div>
    <div id="step4">
            <hr/>
            
                <h3>Job Experience Details</h3>
                
            
            <div>
                <table class="table table-striped ">
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
                            
                            <td><?php echo CHtml::encode($jobExp->joe_employer[0]); echo CHtml::hiddenField('joe_employer[0]',$jobExp->joe_employer[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_address[0]); echo CHtml::hiddenField('joe_address[0]',$jobExp->joe_address[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_contact[0]); echo CHtml::hiddenField('joe_contact[0]',$jobExp->joe_contact[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_position[0]); echo CHtml::hiddenField('joe_position[0]',$jobExp->joe_position[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_startDate[0]); echo CHtml::hiddenField('joe_startDate[0]',$jobExp->joe_startDate[0]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_endDate[0]); echo CHtml::hiddenField('joe_endDate[0]',$jobExp->joe_endDate[0]); ?></td>
                             
                        </tr>
                        <tr>
                            
                            <td><?php echo CHtml::encode($jobExp->joe_employer[1]); echo CHtml::hiddenField('joe_employer[1]',$jobExp->joe_employer[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_address[1]); echo CHtml::hiddenField('joe_address[1]',$jobExp->joe_address[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_contact[1]); echo CHtml::hiddenField('joe_contact[1]',$jobExp->joe_contact[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_position[1]); echo CHtml::hiddenField('joe_position[1]',$jobExp->joe_position[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_startDate[1]); echo CHtml::hiddenField('joe_startDate[1]',$jobExp->joe_startDate[1]); ?></td>
                            <td><?php echo CHtml::encode($jobExp->joe_endDate[1]); echo CHtml::hiddenField('joe_endDate[1]',$jobExp->joe_endDate[1]); ?></td>
                             
                        </tr>
                               
                   
                    </tbody>
                </table>
                
            </div>
            
            
        </div>
    	<div class="">
		
            <?php 
            echo CHtml::hiddenField('HasPreDegree', $_REQUEST['HasPreDegree']);
              echo TbHtml::submitButton('Back', array('color' => TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE))."   ".
             TbHtml::button('Submit', array('color' => TbHtml::BUTTON_COLOR_SUCCESS, 'size' => TbHtml::BUTTON_SIZE_LARGE, 'submit' => array('create', 'preview'=>0)));
            
            ?>
            
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
