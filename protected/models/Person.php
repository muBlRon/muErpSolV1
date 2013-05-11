<?php

/**
 * This is the model class for table "{{person}}".
 *
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
 * @property string $per_husbandsName
 * @property string $per_parmanentAddress
 * @property string $per_postCode
 * @property string $per_telephone
 * @property string $per_mobile
 * @property string $per_email
 * @property string $per_presentAddress
 * @property string $per_maritulStatus
 * @property string $per_englishLanguageProficiency
 * @property string $per_computerLiteracy
 * @property string $per_otherActivities
 * @property string $per_personalStatment
 * @property integer $per_criminalConviction
 * @property string $per_convictionDetails
 * @property string $per_refereeOneName
 * @property string $per_refereeOneOccupation
 * @property string $per_refereeOneAddress
 * @property string $per_refereeOneEmail
 * @property string $per_refereeOneMobile
 * @property string $per_refereeTwoName
 * @property string $per_refereeTwoOccupation
 * @property string $per_refereeTwoAddress
 * @property string $per_refereeTwoEmail
 * @property string $per_refereeTwoMobile
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
			array('per_criminalConviction', 'numerical', 'integerOnly'=>true),
			array('per_title', 'length', 'max'=>5),
			array('per_firstName, per_lastName, per_refereeOneOccupation, per_refereeTwoOccupation', 'length', 'max'=>50),
			array('per_gender', 'length', 'max'=>6),
			array('per_bloodGroup', 'length', 'max'=>3),
			array('per_nationality', 'length', 'max'=>20),
			array('per_fathersName, per_mothersName, per_husbandsName, per_email, per_refereeOneName, per_refereeOneEmail, per_refereeTwoName, per_refereeTwoEmail', 'length', 'max'=>100),
			array('per_parmanentAddress, per_presentAddress, per_computerLiteracy, per_otherActivities, per_refereeOneAddress, per_refereeTwoAddress', 'length', 'max'=>300),
			array('per_postCode', 'length', 'max'=>10),
			array('per_telephone, per_mobile, per_refereeOneMobile, per_refereeTwoMobile', 'length', 'max'=>15),
			array('per_maritulStatus', 'length', 'max'=>7),
			array('per_englishLanguageProficiency', 'length', 'max'=>8),
			array('per_dateofBirth, per_personalStatment, per_convictionDetails, per_entryDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('personID, per_title, per_firstName, per_lastName, per_gender, per_dateofBirth, per_bloodGroup, per_nationality, per_fathersName, per_mothersName, per_husbandsName, per_parmanentAddress, per_postCode, per_telephone, per_mobile, per_email, per_presentAddress, per_maritulStatus, per_englishLanguageProficiency, per_computerLiteracy, per_otherActivities, per_personalStatment, per_criminalConviction, per_convictionDetails, per_refereeOneName, per_refereeOneOccupation, per_refereeOneAddress, per_refereeOneEmail, per_refereeOneMobile, per_refereeTwoName, per_refereeTwoOccupation, per_refereeTwoAddress, per_refereeTwoEmail, per_refereeTwoMobile, per_entryDate', 'safe', 'on'=>'search'),
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
			'academichistories' => array(self::HAS_MANY, 'Academichistory', 'personID'),
			'employee' => array(self::HAS_ONE, 'Employee', 'employeeID'),
			'faculty' => array(self::HAS_ONE, 'Faculty', 'facultyID'),
			'jobexperiances' => array(self::HAS_MANY, 'Jobexperiance', 'personID'),
			'students' => array(self::HAS_MANY, 'Student', 'personID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personID' => 'Person',
			'per_title' => 'Per Title',
			'per_firstName' => 'Per First Name',
			'per_lastName' => 'Per Last Name',
			'per_gender' => 'Per Gender',
			'per_dateofBirth' => 'Per Dateof Birth',
			'per_bloodGroup' => 'Per Blood Group',
			'per_nationality' => 'Per Nationality',
			'per_fathersName' => 'Per Fathers Name',
			'per_mothersName' => 'Per Mothers Name',
			'per_husbandsName' => 'Per Husbands Name',
			'per_parmanentAddress' => 'Per Parmanent Address',
			'per_postCode' => 'Per Post Code',
			'per_telephone' => 'Per Telephone',
			'per_mobile' => 'Per Mobile',
			'per_email' => 'Per Email',
			'per_presentAddress' => 'Per Present Address',
			'per_maritulStatus' => 'Per Maritul Status',
			'per_englishLanguageProficiency' => 'Per English Language Proficiency',
			'per_computerLiteracy' => 'Per Computer Literacy',
			'per_otherActivities' => 'Per Other Activities',
			'per_personalStatment' => 'Per Personal Statment',
			'per_criminalConviction' => 'Per Criminal Conviction',
			'per_convictionDetails' => 'Per Conviction Details',
			'per_refereeOneName' => 'Per Referee One Name',
			'per_refereeOneOccupation' => 'Per Referee One Occupation',
			'per_refereeOneAddress' => 'Per Referee One Address',
			'per_refereeOneEmail' => 'Per Referee One Email',
			'per_refereeOneMobile' => 'Per Referee One Mobile',
			'per_refereeTwoName' => 'Per Referee Two Name',
			'per_refereeTwoOccupation' => 'Per Referee Two Occupation',
			'per_refereeTwoAddress' => 'Per Referee Two Address',
			'per_refereeTwoEmail' => 'Per Referee Two Email',
			'per_refereeTwoMobile' => 'Per Referee Two Mobile',
			'per_entryDate' => 'Per Entry Date',
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
		$criteria->compare('per_nationality',$this->per_nationality,true);
		$criteria->compare('per_fathersName',$this->per_fathersName,true);
		$criteria->compare('per_mothersName',$this->per_mothersName,true);
		$criteria->compare('per_husbandsName',$this->per_husbandsName,true);
		$criteria->compare('per_parmanentAddress',$this->per_parmanentAddress,true);
		$criteria->compare('per_postCode',$this->per_postCode,true);
		$criteria->compare('per_telephone',$this->per_telephone,true);
		$criteria->compare('per_mobile',$this->per_mobile,true);
		$criteria->compare('per_email',$this->per_email,true);
		$criteria->compare('per_presentAddress',$this->per_presentAddress,true);
		$criteria->compare('per_maritulStatus',$this->per_maritulStatus,true);
		$criteria->compare('per_englishLanguageProficiency',$this->per_englishLanguageProficiency,true);
		$criteria->compare('per_computerLiteracy',$this->per_computerLiteracy,true);
		$criteria->compare('per_otherActivities',$this->per_otherActivities,true);
		$criteria->compare('per_personalStatment',$this->per_personalStatment,true);
		$criteria->compare('per_criminalConviction',$this->per_criminalConviction);
		$criteria->compare('per_convictionDetails',$this->per_convictionDetails,true);
		$criteria->compare('per_refereeOneName',$this->per_refereeOneName,true);
		$criteria->compare('per_refereeOneOccupation',$this->per_refereeOneOccupation,true);
		$criteria->compare('per_refereeOneAddress',$this->per_refereeOneAddress,true);
		$criteria->compare('per_refereeOneEmail',$this->per_refereeOneEmail,true);
		$criteria->compare('per_refereeOneMobile',$this->per_refereeOneMobile,true);
		$criteria->compare('per_refereeTwoName',$this->per_refereeTwoName,true);
		$criteria->compare('per_refereeTwoOccupation',$this->per_refereeTwoOccupation,true);
		$criteria->compare('per_refereeTwoAddress',$this->per_refereeTwoAddress,true);
		$criteria->compare('per_refereeTwoEmail',$this->per_refereeTwoEmail,true);
		$criteria->compare('per_refereeTwoMobile',$this->per_refereeTwoMobile,true);
		$criteria->compare('per_entryDate',$this->per_entryDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}