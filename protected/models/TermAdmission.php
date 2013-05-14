<?php

/**
 * This is the model class for table "{{termadmission}}".
 *
 * The followings are the available columns in table '{{termadmission}}':
 * @property integer $termAdmissionID
 * @property string $studentId
 * @property string $sectionName
 * @property integer $batchName
 * @property string $programmeCode
 * @property string $tra_term
 * @property integer $tra_year
 * @property string $tra_date
 * @property integer $employeeID
 *
 * The followings are the available model relations:
 * @property Moduleregistration[] $moduleregistrations
 * @property Admission $student
 * @property Admission $sectionName0
 * @property Admission $batchName0
 * @property Admission $programmeCode0
 * @property Employee $employee
 */
class TermAdmission extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TermAdmission the static model class
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
		return '{{termadmission}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('termAdmissionID, batchName, tra_year, employeeID', 'numerical', 'integerOnly'=>true),
			array('studentId', 'length', 'max'=>15),
			array('sectionName, tra_term', 'length', 'max'=>1),
			array('programmeCode', 'length', 'max'=>10),
			array('tra_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('termAdmissionID, studentId, sectionName, batchName, programmeCode, tra_term, tra_year, tra_date, employeeID', 'safe', 'on'=>'search'),
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
			'moduleregistrations' => array(self::HAS_MANY, 'Moduleregistration', 'termAdmissionID'),
			'student' => array(self::BELONGS_TO, 'Admission', 'studentId'),
			'sectionName0' => array(self::BELONGS_TO, 'Admission', 'sectionName'),
			'batchName0' => array(self::BELONGS_TO, 'Admission', 'batchName'),
			'programmeCode0' => array(self::BELONGS_TO, 'Admission', 'programmeCode'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employeeID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'termAdmissionID' => 'Term Admission',
			'studentId' => 'Student',
			'sectionName' => 'Section Name',
			'batchName' => 'Batch Name',
			'programmeCode' => 'Programme Code',
			'tra_term' => 'Tra Term',
			'tra_year' => 'Tra Year',
			'tra_date' => 'Tra Date',
			'employeeID' => 'Employee',
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

		$criteria->compare('termAdmissionID',$this->termAdmissionID);
		$criteria->compare('studentId',$this->studentId,true);
		$criteria->compare('sectionName',$this->sectionName,true);
		$criteria->compare('batchName',$this->batchName);
		$criteria->compare('programmeCode',$this->programmeCode,true);
		$criteria->compare('tra_term',$this->tra_term,true);
		$criteria->compare('tra_year',$this->tra_year);
		$criteria->compare('tra_date',$this->tra_date,true);
		$criteria->compare('employeeID',$this->employeeID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}