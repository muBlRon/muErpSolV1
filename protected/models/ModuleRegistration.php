<?php

/**
 * This is the model class for table "{{moduleregistration}}".
 *
 * The followings are the available columns in table '{{moduleregistration}}':
 * @property integer $moduleRegistrationID
 * @property integer $termAdmissionID
 * @property integer $offeredModuleID
 * @property string $reg_date
 * @property string $reg_type
 * @property double $reg_attendence
 * @property double $reg_classTest
 * @property double $reg_midTerm
 * @property integer $markingSchameID
 * @property integer $facultyID
 *
 * The followings are the available model relations:
 * @property Examination[] $tblExaminations
 * @property Termadmission $termAdmission
 * @property Faculty $faculty
 * @property Markingschame $markingSchame
 * @property Offeredmodule $offeredModule
 */
class ModuleRegistration extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ModuleRegistration the static model class
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
		return '{{moduleregistration}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('moduleRegistrationID, termAdmissionID, offeredModuleID, markingSchameID, facultyID', 'numerical', 'integerOnly'=>true),
			array('reg_attendence, reg_classTest, reg_midTerm', 'numerical'),
			array('reg_type', 'length', 'max'=>1),
			array('reg_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('moduleRegistrationID, termAdmissionID, offeredModuleID, reg_date, reg_type, reg_attendence, reg_classTest, reg_midTerm, markingSchameID, facultyID', 'safe', 'on'=>'search'),
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
			'tblExaminations' => array(self::MANY_MANY, 'Examination', '{{examregistration}}(moduleRegistrationID, examinationID)'),
			'termAdmission' => array(self::BELONGS_TO, 'Termadmission', 'termAdmissionID'),
			'faculty' => array(self::BELONGS_TO, 'Faculty', 'facultyID'),
			'markingSchame' => array(self::BELONGS_TO, 'Markingschame', 'markingSchameID'),
			'offeredModule' => array(self::BELONGS_TO, 'Offeredmodule', 'offeredModuleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'moduleRegistrationID' => 'Module Registration',
			'termAdmissionID' => 'Term Admission',
			'offeredModuleID' => 'Offered Module',
			'reg_date' => 'Reg Date',
			'reg_type' => 'Reg Type',
			'reg_attendence' => 'Reg Attendence',
			'reg_classTest' => 'Reg Class Test',
			'reg_midTerm' => 'Reg Mid Term',
			'markingSchameID' => 'Marking Schame',
			'facultyID' => 'Faculty',
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

		$criteria->compare('moduleRegistrationID',$this->moduleRegistrationID);
		$criteria->compare('termAdmissionID',$this->termAdmissionID);
		$criteria->compare('offeredModuleID',$this->offeredModuleID);
		$criteria->compare('reg_date',$this->reg_date,true);
		$criteria->compare('reg_type',$this->reg_type,true);
		$criteria->compare('reg_attendence',$this->reg_attendence);
		$criteria->compare('reg_classTest',$this->reg_classTest);
		$criteria->compare('reg_midTerm',$this->reg_midTerm);
		$criteria->compare('markingSchameID',$this->markingSchameID);
		$criteria->compare('facultyID',$this->facultyID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}