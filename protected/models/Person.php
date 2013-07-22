<?php

/**
 * This is the model class for table "{{person}}".
 * * -update --ron--13-05-2013-
 * The followings are the available columns in table '{{person}}':
 * @property integer $personID
 * @property string $per_title
 * @property string $per_firstName
 * @property string $per_lastName
 * @property string $per_gender
 * @property string $per_dateofBirth
 * @property string $per_bloodGroup
 * @property string $per_nationality
 * @property string $per_fathersName
 * @property string $per_mothersName
 * @property string $per_spouseName
 * @property string $per_parmanentAddress
 * @property string $per_postCode
 * @property string $per_telephone
 * @property string $per_mobile
 * @property string $per_email
 * @property string $per_presentAddress
 * @property string $per_maritulStatus
 
 
 
 * @property string $per_personalStatment
 * @property integer $per_criminalConviction
 * @property string $per_convictionDetails
 
 * @property string $per_entryDate
 *
 * The followings are the available model relations:
 * @property Academichistory[] $academichistories
 * @property Employee $employee
 * @property Faculty $faculty
 * @property Jobexperiance[] $jobexperiances
 * @property Student[] $students
 */
class Person extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Person the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{person}}';
            
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    
                        array('per_title, per_firstName, per_lastName, per_gender, per_nationality, per_maritulStatus, per_dateofBirth, per_fathersName, per_mothersName, per_mobile,per_bloodGroup,per_presentAddress,per_parmanentAddress,per_postCode', 'required'),
			array(' per_telephone, per_mobile, ', 'numerical', 'integerOnly'=>true),
			array('per_email, ', 'email'),
                        
                        array('per_criminalConviction', 'boolean'),
                    
                        array('per_title', 'in', 'range'=>array('Mr.','Ms.','Mrs.','Dr.','Prof.','Engr.','Adv.')),
                        array('per_bloodGroup', 'in', 'range'=>array('O+','A+','B+','AB+','O-','A-','B-','AB-')),
                        array('per_maritulStatus', 'in', 'range'=>array('single','married')),
                        
                    
                        
                    
                        array('per_title', 'length', 'max'=>5),
			array('per_firstName, per_lastName', 'length', 'max'=>50),
			array('per_gender', 'length', 'max'=>6),
			array('per_bloodGroup', 'length', 'max'=>3),
			array('per_nationality', 'length', 'max'=>20),
			array('per_fathersName, per_mothersName, per_spouseName, per_email ,', 'length', 'max'=>100),
			array('per_parmanentAddress, per_presentAddress, ', 'length', 'max'=>300),
			array('per_postCode', 'length', 'max'=>10),
			array('per_telephone, per_mobile,  ', 'length', 'max'=>15),
			array('per_maritulStatus', 'length', 'max'=>7),
			
			array('per_personalStatment, per_convictionDetails', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('personID, per_title, per_firstName, per_lastName, per_gender, per_dateofBirth, per_bloodGroup, per_telephone, per_mobile, per_email, per_maritulStatus, per_criminalConviction, per_entryDate', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'academichistories' => array(self::HAS_MANY, 'AcademicHistory', 'personID'),
                        'jobexperiances' => array(self::HAS_MANY, 'JobExperiance', 'personID'),
			
                        'employee' => array(self::HAS_ONE, 'Employee', 'employeeID'),
			'faculty' => array(self::HAS_ONE, 'Faculty', 'facultyID'),
			
			'students' => array(self::HAS_MANY, 'Student', 'personID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personID' => 'personID',
			'per_title' => 'Title',
			'per_firstName' => 'First Name',
			'per_lastName' => 'Last Name',
			'per_gender' => 'Gender',
			'per_dateofBirth' => 'Date Of Birth',
			'per_bloodGroup' => 'Blood Group',
			'per_nationality' => 'Nationality',
			'per_fathersName' => 'Fathers Name',
			'per_mothersName' => 'Mothers Name',
			'per_spouseName' => 'Spouse Name',
			'per_parmanentAddress' => 'Parmanent Address',
			'per_postCode' => 'Post Code',
			'per_telephone' => 'Telephone',
			'per_mobile' => 'Mobile',
			'per_email' => 'Email',
			'per_presentAddress' => 'Present Address',
			'per_maritulStatus' => 'Maritul Status',
			
			
			
			'per_personalStatment' => 'Personal Statment',
			'per_criminalConviction' => 'Criminal Conviction',
			'per_convictionDetails' => 'Conviction Details',
			
			'per_entryDate' => 'Entry Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('personID',$this->personID);
		$criteria->compare('per_title',$this->per_title,true);
		$criteria->compare('per_firstName',$this->per_firstName,true);
		$criteria->compare('per_lastName',$this->per_lastName,true);
		$criteria->compare('per_gender',$this->per_gender,true);
		$criteria->compare('per_dateofBirth',$this->per_dateofBirth,true);
		$criteria->compare('per_bloodGroup',$this->per_bloodGroup,true);
		$criteria->compare('per_telephone',$this->per_telephone,true);
		$criteria->compare('per_mobile',$this->per_mobile,true);
		$criteria->compare('per_email',$this->per_email,true);
		$criteria->compare('per_maritulStatus',$this->per_maritulStatus,true);
		$criteria->compare('per_criminalConviction',$this->per_criminalConviction);
		$criteria->compare('per_entryDate',$this->per_entryDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}