<?php

/**
 * This is the model class for table "{{jobexperiance}}".
 *
 * The followings are the available columns in table '{{jobexperiance}}':
 * @property integer $jobExperianceID
 * @property string $joe_employer
 * @property string $joe_address
 * @property string $joe_position
 * @property string $joe_startDate
 * @property string $joe_endDate
 * @property string $joe_contact
 * @property integer $personID
 *
 * The followings are the available model relations:
 * @property Person $person
 */
class Jobexperiance extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jobexperiance the static model class
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
		return '{{jobexperiance}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jobExperianceID, personID', 'numerical', 'integerOnly'=>true),
			array('joe_employer', 'length', 'max'=>200),
			array('joe_address', 'length', 'max'=>300),
			array('joe_position', 'length', 'max'=>50),
			array('joe_contact', 'length', 'max'=>15),
			array('joe_startDate, joe_endDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jobExperianceID, joe_employer, joe_address, joe_position, joe_startDate, joe_endDate, joe_contact, personID', 'safe', 'on'=>'search'),
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
			'person' => array(self::BELONGS_TO, 'Person', 'personID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jobExperianceID' => 'Job Experiance',
			'joe_employer' => 'Joe Employer',
			'joe_address' => 'Joe Address',
			'joe_position' => 'Joe Position',
			'joe_startDate' => 'Joe Start Date',
			'joe_endDate' => 'Joe End Date',
			'joe_contact' => 'Joe Contact',
			'personID' => 'Person',
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

		$criteria->compare('jobExperianceID',$this->jobExperianceID);
		$criteria->compare('joe_employer',$this->joe_employer,true);
		$criteria->compare('joe_address',$this->joe_address,true);
		$criteria->compare('joe_position',$this->joe_position,true);
		$criteria->compare('joe_startDate',$this->joe_startDate,true);
		$criteria->compare('joe_endDate',$this->joe_endDate,true);
		$criteria->compare('joe_contact',$this->joe_contact,true);
		$criteria->compare('personID',$this->personID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}