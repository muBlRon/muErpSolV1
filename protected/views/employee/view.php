<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->employeeID,
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->employeeID)),
	array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->employeeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->employeeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'employeeID',
		'emp_designations',
		'emp_suppervisoryRole',
		'emp_joining',
		'emp_leave',
		'emp_loginName',
		'emp_password',
		'emp_accessLevel',
		'administrationCode',
              array(
                        'name' => 'per_title',
                        'value' => $model->employee->per_title,                
                ),
              array(
                        'name' => 'per_firstName',
                        'value' => $model->employee->per_firstName,               
                ),
             array(
                      'name' => 'per_lastName',
                      'value' => $model->employee->per_lastName,                    
                ),
              array(
                        'name' => 'per_gender',
                        'value' => $model->employee->per_gender,                
                ),
              array(
                        'name' => 'per_dateofBirth',
                        'value' => $model->employee->per_dateofBirth,               
                ),
             array(
                      'name' => 'per_bloodGroup',
                      'value' => $model->employee->per_bloodGroup,                    
                ),
            array(
                        'name' => 'per_nationality',
                        'value' => $model->employee->per_nationality,                
                ),
              array(
                        'name' => 'per_fathersName',
                        'value' => $model->employee->per_fathersName,               
                ),
             array(
                      'name' => 'per_mothersName',
                      'value' => $model->employee->per_mothersName,                    
                ),
              array(
                        'name' => 'per_husbandsName',
                        'value' => $model->employee->per_husbandsName,                
                ),
              array(
                        'name' => 'per_parmanentAddress',
                        'value' => $model->employee->per_parmanentAddress,               
                ),
             array(
                      'name' => 'per_postCode',
                      'value' => $model->employee->per_postCode,                    
                ),
            array(
                        'name' => 'per_telephone',
                        'value' => $model->employee->per_telephone,                
                ),
              array(
                        'name' => 'per_mobile',
                        'value' => $model->employee->per_mobile,               
                ),
             array(
                      'name' => 'per_email',
                      'value' => $model->employee->per_email,                    
                ),
              array(
                        'name' => 'per_presentAddress',
                        'value' => $model->employee->per_presentAddress,                
                ),
              array(
                        'name' => 'per_maritulStatus',
                        'value' => $model->employee->per_maritulStatus,               
                ),
             array(
                      'name' => 'per_englishLanguageProficiency',
                      'value' => $model->employee->per_englishLanguageProficiency,                    
                ),
            array(
                        'name' => 'per_computerLiteracy',
                        'value' => $model->employee->per_computerLiteracy,                
                ),
              array(
                        'name' => 'per_otherActivities',
                        'value' => $model->employee->per_otherActivities,               
                ),
             array(
                      'name' => 'per_personalStatment',
                      'value' => $model->employee->per_personalStatment,                    
                ),
              /*array(
                        'name' => 'per_criminalConviction',
                        'value' => $model->employee->per_criminalConviction,                
                ),*/
              array(
                        'name' => 'per_convictionDetails',
                        'value' => $model->employee->per_convictionDetails,               
                ),
             array(
                      'name' => 'per_refereeOneName',
                      'value' => $model->employee->per_refereeOneName,                    
                ),
            array(
                        'name' => 'per_refereeOneOccupation',
                        'value' => $model->employee->per_refereeOneOccupation,               
                ),
             array(
                      'name' => 'per_refereeOneAddress',
                      'value' => $model->employee->per_refereeOneAddress,                    
                ),
             array(
                      'name' => 'per_refereeOneEmail',
                      'value' => $model->employee->per_refereeOneEmail,                    
                ),
            array(
                        'name' => 'per_refereeOneMobile',
                        'value' => $model->employee->per_refereeOneMobile,               
                ),
             array(
                      'name' => 'per_refereeTwoName',
                      'value' => $model->employee->per_refereeTwoName,                    
                ),
            array(
                      'name' => 'per_refereeTwoOccupation',
                      'value' => $model->employee->per_refereeTwoOccupation,                    
                ),
             array(
                      'name' => 'per_refereeTwoAddress',
                      'value' => $model->employee->per_refereeTwoAddress,                    
                ),
            array(
                        'name' => 'per_refereeTwoEmail',
                        'value' => $model->employee->per_refereeTwoEmail,               
                ),
             array(
                      'name' => 'per_refereeTwoMobile',
                      'value' => $model->employee->per_refereeTwoMobile,                    
                ),
             array(
                      'name' => 'per_entryDate',
                      'value' => $model->employee->per_entryDate,                    
                ),
            
            
      	),
)); 

 ?>


