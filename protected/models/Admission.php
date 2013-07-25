<?php

/**
 * This is the model class for table "{{admission}}".
 *
 * The followings are the available columns in table '{{admission}}':
 * @property string $studentID
 * @property string $sectionName
 * @property integer $batchName
 * @property string $programmeCode
 * @property string $adm_date
 * @property string $adm_status
 * @property integer $adm_creditTransfered
 * @property string $adm_remarks
 * @property integer $employeeID
 *
 * The followings are the available model relations:
 * @property Employee $employee
 * @property Section $sectionName0
 * @property Section $batchName0
 * @property Section $programmeCode0
 * @property Student $student
 * @property Termadmission[] $termadmissions
 * @property Termadmission[] $termadmissions1
 * @property Termadmission[] $termadmissions2
 * @property Termadmission[] $termadmissions3
 */
class Admission extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Admission the static model class
	 */
        public $academicYear;
        public $academicTerm;
        public $per_title;
        public $per_firstName;
        public $per_lastName;
        public $per_gender;
        public $per_bloodGroup;
        
        public $per_mobile;
        
        public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{admission}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('batchName, adm_creditTransfered, employeeID', 'numerical', 'integerOnly'=>true),
			array('studentID', 'length', 'max'=>15),
			array('sectionName, adm_status', 'length', 'max'=>1),
			array('programmeCode', 'length', 'max'=>10),
			array('adm_date,', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('studentID, sectionName, batchName, programmeCode,per_bloodGroup, per_title, per_firstName, per_lastName, adm_date, adm_status, adm_creditTransfered, adm_remarks, employeeID', 'safe', 'on'=>'search'),
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
			'employee' => array(self::BELONGS_TO, 'Employee', 'employeeID'),
			'sectionName0' => array(self::BELONGS_TO, 'Section', 'sectionName'),
			'batchName0' => array(self::BELONGS_TO, 'Section', 'batchName'),
			'programmeCode0' => array(self::BELONGS_TO, 'Section', 'programmeCode'),
			'student' => array(self::BELONGS_TO, 'Student', 'studentID'),
			'termadmissions' => array(self::HAS_MANY, 'Termadmission', 'studentId'),
			'termadmissions1' => array(self::HAS_MANY, 'Termadmission', 'sectionName'),
			'termadmissions2' => array(self::HAS_MANY, 'Termadmission', 'batchName'),
			'termadmissions3' => array(self::HAS_MANY, 'Termadmission', 'programmeCode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'studentID' => 'Student',
			'sectionName' => 'Section Name',
			'batchName' => 'Batch Name',
			'programmeCode' => 'Programme Code',
			'adm_date' => 'Admission Date',
			'adm_status' => 'Adm Status',
			'adm_creditTransfered' => 'Adm Credit Transfered',
			'adm_remarks' => 'Adm Remarks',
			'employeeID' => 'Employee',
                        'per_title' => 'Title',
                    'per_firstName' => 'First Name',
                    'per_lastName' => 'Last Name',
                        'per_bloodGroup' => 'Blood Group',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($secName,$batName,$proCode)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
                $criteria->select=array(
                't.*', 
                's.stu_guardiansMobile AS guardiansMobile',
                's.stu_academicTerm AS academicTerm',
                's.stu_academicYear AS academicYear',
                    'p.per_title',
                    'p.per_firstName',
                    'p.per_lastName',
                    'p.per_gender',
                    'p.per_bloodGroup',
                    'p.per_firstName',
                    'p.per_mobile',
            );
              
                $criteria->join="JOIN {{student}} AS s ON s.studentID = t.studentID";
                $criteria->join.=" JOIN {{person}} AS p ON p.personID = s.personID";
                $criteria->condition="t.programmeCode=:proCode and t.batchName=:batName and t.sectionName=:secName";
                $criteria->params=array(':proCode'=>$proCode,':batName'=>$batName,':secName'=>$secName);

                
		$criteria->compare('studentID',$this->studentID,true);
		$criteria->compare('sectionName',$this->sectionName,true);
		$criteria->compare('batchName',$this->batchName);
		$criteria->compare('programmeCode',$this->programmeCode,true);
		$criteria->compare('adm_date',$this->adm_date,true);
		$criteria->compare('adm_status',$this->adm_status,true);
		$criteria->compare('adm_creditTransfered',$this->adm_creditTransfered);
		$criteria->compare('adm_remarks',$this->adm_remarks,true);
		$criteria->compare('employeeID',$this->employeeID);
                $criteria->compare('per_firstName',$this->per_firstName,true);
                $criteria->compare('per_lastName',$this->per_lastName,true);
                $criteria->compare('per_title',$this->per_title,true);
                $criteria->compare('per_bloodGroup',$this->per_bloodGroup,true);
                
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}