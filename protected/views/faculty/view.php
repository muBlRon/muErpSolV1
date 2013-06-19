<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	$model->facultyID,
);

$this->menu=array(
	array('label'=>'List Faculty', 'url'=>array('index')),
	
	array('label'=>'Update Faculty', 'url'=>array('update', 'id'=>$model->facultyID)),
	array('label'=>'View Academic Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('academicHistory/view','id'=>$model->facultyID),)),
	array('label'=>'Delete Faculty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->facultyID),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Profile of <?php echo Person::model()->findByPk($model->facultyID)->per_title.' '.Person::model()->findByPk($model->facultyID)->per_firstName; ?></h1>

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
              array(               // related city displayed as a link
            'label'=>'First Name',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_firstName,),
            array(               // related city displayed as a link
            'label'=>'Last Name',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_lastName,), 
            array(               // related city displayed as a link
            'label'=>'Nationality',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_nationality,),
            array(               // related city displayed as a link
            'label'=>'Marital Status',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_maritulStatus,),
            array(               // related city displayed as a link
            'label'=>'Date of Birth',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_dateofBirth,),
            array(               // related city displayed as a link
            'label'=>'Fathers Name',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_fathersName,),
            array(               // related city displayed as a link
            'label'=>'Mothers Name',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_mothersName,),
            array(               // related city displayed as a link
            'label'=>'Address',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_presentAddress,),
            array(               // related city displayed as a link
            'label'=>'Post Code',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_postCode,),
            array(               // related city displayed as a link
            'label'=>'Mobile No',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_mobile,),array(               // related city displayed as a link
            'label'=>'Email',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_email,),array(               // related city displayed as a link
            'label'=>'Telephone',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_telephone,),array(               // related city displayed as a link
            'label'=>'Blood Group',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_bloodGroup,),array(               // related city displayed as a link
            'label'=>'Post Code',
            'type'=>'raw',
            'value'=>Person::model()->findByPk($model->facultyID)->per_postCode,),
            
	),
)); 



?>

