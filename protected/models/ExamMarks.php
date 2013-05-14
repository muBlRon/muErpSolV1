<?php

/**
 * This is the model class for table "{{exammarks}}".
 *
 * The followings are the available columns in table '{{exammarks}}':
 * @property integer $examinationID
 * @property integer $moduleRegistrationID
 * @property string $emr_date
 * @property double $emr_mark
 * @property integer $facultyID
 *
 * The followings are the available model relations:
 * @property Examregistration $examination
 * @property Examregistration $moduleRegistration
 */
class ExamMarks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExamMarks the static model class
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
		return '{{exammarks}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('examinationID, moduleRegistrationID, facultyID', 'numerical', 'integerOnly'=>true),
			array('emr_mark', 'numerical'),
			array('emr_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('examinationID, moduleRegistrationID, emr_date, emr_mark, facultyID', 'safe', 'on'=>'search'),
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
			'examination' => array(self::BELONGS_TO, 'Examregistration', 'examinationID'),
			'moduleRegistration' => array(self::BELONGS_TO, 'Examregistration', 'moduleRegistrationID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'examinationID' => 'Examination',
			'moduleRegistrationID' => 'Module Registration',
			'emr_date' => 'Emr Date',
			'emr_mark' => 'Emr Mark',
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

		$criteria->compare('examinationID',$this->examinationID);
		$criteria->compare('moduleRegistrationID',$this->moduleRegistrationID);
		$criteria->compare('emr_date',$this->emr_date,true);
		$criteria->compare('emr_mark',$this->emr_mark);
		$criteria->compare('facultyID',$this->facultyID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}