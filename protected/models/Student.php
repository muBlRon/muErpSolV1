<?php

/**
 * This is the model class for table "{{student}}".
 *
 * The followings are the available columns in table '{{student}}':
 * @property string $studentID
 * @property integer $personID
 * @property string $stu_academicTerm
 * @property integer $stu_academicYear
 * @property string $stu_testDate
 * @property double $stu_totalScore
 * @property double $stu_optainedScore
 * @property string $stu_conditions
 * @property string $stu_previousID
 * @property string $stu_previousDegree
 * @property string $stu_guardiansName
 * @property string $stu_guardiansPostcode
 * @property string $stu_guardiansTelephone
 * @property string $stu_guardiansMobile
 * @property string $stu_guardiansEmail
 * @property string $stu_financialSource
 * @property string $stu_financialSourceDescription
 * @property integer $employeeID
 * @property string $programmeCode
 *
 * The followings are the available model relations:
 * @property Admission[] $admissions
 * @property Programme $programmeCode0
 * @property Employee $employee
 * @property Person $person
 */
class Student extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		return '{{student}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    
			array('personID, stu_academicYear, employeeID, stu_guardiansTelephone, stu_guardiansMobile', 'numerical', 'integerOnly'=>true),
			array('stu_totalScore, stu_optainedScore', 'numerical'),
			array('studentID, stu_previousID, stu_guardiansTelephone, stu_guardiansMobile', 'length', 'max'=>15),
			array('stu_academicTerm', 'length', 'max'=>1),
                        
			array('stu_previousDegree', 'length', 'max'=>50),
			array('stu_guardiansName, stu_guardiansEmail', 'length', 'max'=>100),
			array('stu_guardiansPostcode, stu_financialSource, programmeCode', 'length', 'max'=>10),
			array('stu_financialSourceDescription', 'length', 'max'=>300),
			array('studentID, stu_previousID', 'length', 'max'=>11),
                        array('stu_conditions, stu_financialSourceDescription', 'safe'),
                    
                        array('stu_guardiansEmail', 'email'),
                        
                        array('stu_testDate', 'date'),
                        array('stu_academicTerm', 'in', 'range'=>array('1','2','3')),
                        array('studentID, personID, stu_academicTerm, stu_academicYear, programmeCode', 'required'),
                    
                        
                    
                        array('studentID, stu_previousID', 'match', 'pattern'=>'/^([0-9][0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9])$/',
                        'message'=>'ID has specific format like [111-115-001] .'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('studentID, personID, stu_academicTerm, stu_academicYear,stu_testDate, stu_optainedScore, stu_previousID, stu_previousDegree, employeeID, programmeCode', 'safe', 'on'=>'search'),
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
			'admissions' => array(self::HAS_MANY, 'Admission', 'studentID'),
			'programmeCode0' => array(self::BELONGS_TO, 'Programme', 'programmeCode'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employeeID'),
			'person' => array(self::BELONGS_TO, 'Person', 'personID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'studentID' => 'StudentID',
			'personID' => 'PersonID',
			'stu_academicTerm' => 'Academic Term',
			'stu_academicYear' => 'Academic Year',
			'stu_testDate' => 'Test Date',
			'stu_totalScore' => 'Total Score',
			'stu_optainedScore' => 'Optained Score',
			'stu_conditions' => 'Conditions',
			'stu_previousID' => 'Previous',
			'stu_previousDegree' => 'Previous Degree',
			'stu_guardiansName' => 'Guardians Name',
			'stu_guardiansPostcode' => 'Guardians Postcode',
			'stu_guardiansTelephone' => 'Guardians Telephone',
			'stu_guardiansMobile' => 'Guardians Mobile',
			'stu_guardiansEmail' => 'Guardians Email',
			'stu_financialSource' => 'Financial Source',
			'stu_financialSourceDescription' => 'Financial Source Description',
			'employeeID' => 'EmployeeID',
			'programmeCode' => 'ProgrammeCode',
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

		$criteria->compare('studentID',$this->studentID,true);
		$criteria->compare('personID',$this->personID);
		$criteria->compare('stu_academicTerm',$this->stu_academicTerm,true);
		$criteria->compare('stu_academicYear',$this->stu_academicYear);
		$criteria->compare('stu_testDate',$this->stu_testDate,true);
		
		$criteria->compare('stu_optainedScore',$this->stu_optainedScore);
		
		$criteria->compare('stu_previousID',$this->stu_previousID,true);
		$criteria->compare('stu_previousDegree',$this->stu_previousDegree,true);
		
		$criteria->compare('employeeID',$this->employeeID);
		$criteria->compare('programmeCode',$this->programmeCode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}