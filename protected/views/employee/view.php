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
    	array('label'=>'Generate Report', 'url'=>array('report')),
    
);

?>

<h1>Profile of <?php echo Person::model()->findByPk($model->employeeID)->per_title.' '.Person::model()->findByPk($model->employeeID)->per_firstName; ?></h1>

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
            array(               // related city displayed as a link
            'label'=>'First Name',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_firstName,),
            array(               // related city displayed as a link
            'label'=>'Last Name',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_lastName,), 
            array(               // related city displayed as a link
            'label'=>'Nationality',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_nationality,),
            array(               // related city displayed as a link
            'label'=>'Marital Status',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_maritulStatus,),
            array(               // related city displayed as a link
            'label'=>'Date of Birth',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_dateofBirth,),
            array(               // related city displayed as a link
            'label'=>'Fathers Name',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_fathersName,),
            array(               // related city displayed as a link
            'label'=>'Mothers Name',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_mothersName,),
            array(               // related city displayed as a link
            'label'=>'Address',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_presentAddress,),
            array(               // related city displayed as a link
            'label'=>'Post Code',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_postCode,),
            array(               // related city displayed as a link
            'label'=>'Mobile No',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_mobile,),array(               // related city displayed as a link
            'label'=>'Email',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_email,),array(               // related city displayed as a link
            'label'=>'Telephone',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_telephone,),array(               // related city displayed as a link
            'label'=>'Blood Group',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_bloodGroup,),array(               // related city displayed as a link
            'label'=>'Post Code',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->employeeID)->per_postCode,),
	),
)); 


?>
