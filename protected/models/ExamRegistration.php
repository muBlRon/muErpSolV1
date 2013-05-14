<?php

/**
 * This is the model class for table "{{examregistration}}".
 *
 * The followings are the available columns in table '{{examregistration}}':
 * @property integer $examinationID
 * @property integer $moduleRegistrationID
 * @property string $exr_date
 * @property string $exr_issueAdmit
 * @property integer $employeeID
 *
 * The followings are the available model relations:
 * @property Exammarks[] $exammarks
 * @property Exammarks[] $exammarks1
 */
class ExamRegistration extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExamRegistration the static model class
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
		return '{{examregistration}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('examinationID, moduleRegistrationID, employeeID', 'numerical', 'integerOnly'=>true),
			array('exr_issueAdmit', 'length', 'max'=>1),
			array('exr_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('examinationID, moduleRegistrationID, exr_date, exr_issueAdmit, employeeID', 'safe', 'on'=>'search'),
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
			'exammarks' => array(self::HAS_MANY, 'Exammarks', 'examinationID'),
			'exammarks1' => array(self::HAS_MANY, 'Exammarks', 'moduleRegistrationID'),
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
			'exr_date' => 'Exr Date',
			'exr_issueAdmit' => 'Exr Issue Admit',
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

		$criteria->compare('examinationID',$this->examinationID);
		$criteria->compare('moduleRegistrationID',$this->moduleRegistrationID);
		$criteria->compare('exr_date',$this->exr_date,true);
		$criteria->compare('exr_issueAdmit',$this->exr_issueAdmit,true);
		$criteria->compare('employeeID',$this->employeeID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}