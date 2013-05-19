<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	$model->facultyID,
);

$this->menu=array(
	array('label'=>'List Faculty', 'url'=>array('index')),
	array('label'=>'Create Faculty', 'url'=>array('create')),
	array('label'=>'Update Faculty', 'url'=>array('update', 'id'=>$model->facultyID)),
	array('label'=>'Delete Faculty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->facultyID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Faculty', 'url'=>array('admin')),
);
?>

<h1>View Faculty #<?php echo $model->facultyID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'facultyID',
		'fac_designation',
		'fac_position',
		'fac_joining',
		'fac_leave',
		'fac_loginName',
		'fac_password',
		'fac_accessLevel',
		'departmentID',
            array(
                        'name' => 'per_title',
                        'value' => $model->faculty->per_title,                
                ),
              array(
                        'name' => 'per_firstName',
                        'value' => $model->faculty->per_firstName,               
                ),
             array(
                      'name' => 'per_lastName',
                      'value' => $model->faculty->per_lastName,                    
                ),
              array(
                        'name' => 'per_gender',
                        'value' => $model->faculty->per_gender,                
                ),
              array(
                        'name' => 'per_dateofBirth',
                        'value' => $model->faculty->per_dateofBirth,               
                ),
             array(
                      'name' => 'per_bloodGroup',
                      'value' => $model->faculty->per_bloodGroup,                    
                ),
            array(
                        'name' => 'per_nationality',
                        'value' => $model->faculty->per_nationality,                
                ),
              array(
                        'name' => 'per_fathersName',
                        'value' => $model->faculty->per_fathersName,               
                ),
             array(
                      'name' => 'per_mothersName',
                      'value' => $model->faculty->per_mothersName,                    
                ),
              array(
                        'name' => 'per_husbandsName',
                        'value' => $model->faculty->per_husbandsName,                
                ),
              array(
                        'name' => 'per_parmanentAddress',
                        'value' => $model->faculty->per_parmanentAddress,               
                ),
             array(
                      'name' => 'per_postCode',
                      'value' => $model->faculty->per_postCode,                    
                ),
            array(
                        'name' => 'per_telephone',
                        'value' => $model->faculty->per_telephone,                
                ),
              array(
                        'name' => 'per_mobile',
                        'value' => $model->faculty->per_mobile,               
                ),
             array(
                      'name' => 'per_email',
                      'value' => $model->faculty->per_email,                    
                ),
              array(
                        'name' => 'per_presentAddress',
                        'value' => $model->faculty->per_presentAddress,                
                ),
              array(
                        'name' => 'per_maritulStatus',
                        'value' => $model->faculty->per_maritulStatus,               
                ),
             array(
                      'name' => 'per_englishLanguageProficiency',
                      'value' => $model->faculty->per_englishLanguageProficiency,                    
                ),
            array(
                        'name' => 'per_computerLiteracy',
                        'value' => $model->faculty->per_computerLiteracy,                
                ),
              array(
                        'name' => 'per_otherActivities',
                        'value' => $model->faculty->per_otherActivities,               
                ),
             array(
                      'name' => 'per_personalStatment',
                      'value' => $model->faculty->per_personalStatment,                    
                ),
              /*array(
                        'name' => 'per_criminalConviction',
                        'value' => $model->employee->per_criminalConviction,                
                ),*/
              array(
                        'name' => 'per_convictionDetails',
                        'value' => $model->faculty->per_convictionDetails,               
                ),
             array(
                      'name' => 'per_refereeOneName',
                      'value' => $model->faculty->per_refereeOneName,                    
                ),
            array(
                        'name' => 'per_refereeOneOccupation',
                        'value' => $model->faculty->per_refereeOneOccupation,               
                ),
             array(
                      'name' => 'per_refereeOneAddress',
                      'value' => $model->faculty->per_refereeOneAddress,                    
                ),
             array(
                      'name' => 'per_refereeOneEmail',
                      'value' => $model->faculty->per_refereeOneEmail,                    
                ),
            array(
                        'name' => 'per_refereeOneMobile',
                        'value' => $model->faculty->per_refereeOneMobile,               
                ),
             array(
                      'name' => 'per_refereeTwoName',
                      'value' => $model->faculty->per_refereeTwoName,                    
                ),
            array(
                      'name' => 'per_refereeTwoOccupation',
                      'value' => $model->faculty->per_refereeTwoOccupation,                    
                ),
             array(
                      'name' => 'per_refereeTwoAddress',
                      'value' => $model->faculty->per_refereeTwoAddress,                    
                ),
            array(
                        'name' => 'per_refereeTwoEmail',
                        'value' => $model->faculty->per_refereeTwoEmail,               
                ),
             array(
                      'name' => 'per_refereeTwoMobile',
                      'value' => $model->faculty->per_refereeTwoMobile,                    
                ),
             array(
                      'name' => 'per_entryDate',
                      'value' => $model->faculty->per_entryDate,                    
                ),
            
	),
)); ?>
