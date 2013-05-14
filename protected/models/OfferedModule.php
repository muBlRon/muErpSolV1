<?php

/**
 * This is the model class for table "{{offeredmodule}}".
 *
 * The followings are the available columns in table '{{offeredmodule}}':
 * @property integer $offeredModuleID
 * @property string $moduleCode
 * @property string $sectionName
 * @property integer $batchName
 * @property string $programmeCode
 * @property integer $facultyID
 * @property string $ofm_term
 * @property integer $ofm_year
 *
 * The followings are the available model relations:
 * @property Moduleregistration[] $moduleregistrations
 * @property Section $sectionName0
 * @property Section $batchName0
 * @property Section $programmeCode0
 * @property Faculty $faculty
 * @property Module $moduleCode0
 */
class OfferedModule extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OfferedModule the static model class
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
		return '{{offeredmodule}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('offeredModuleID, batchName, facultyID, ofm_year', 'numerical', 'integerOnly'=>true),
			array('moduleCode, programmeCode', 'length', 'max'=>10),
			array('sectionName, ofm_term', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('offeredModuleID, moduleCode, sectionName, batchName, programmeCode, facultyID, ofm_term, ofm_year', 'safe', 'on'=>'search'),
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
			'moduleregistrations' => array(self::HAS_MANY, 'Moduleregistration', 'offeredModuleID'),
			'sectionName0' => array(self::BELONGS_TO, 'Section', 'sectionName'),
			'batchName0' => array(self::BELONGS_TO, 'Section', 'batchName'),
			'programmeCode0' => array(self::BELONGS_TO, 'Section', 'programmeCode'),
			'faculty' => array(self::BELONGS_TO, 'Faculty', 'facultyID'),
			'moduleCode0' => array(self::BELONGS_TO, 'Module', 'moduleCode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'offeredModuleID' => 'Offered Module',
			'moduleCode' => 'Module Code',
			'sectionName' => 'Section Name',
			'batchName' => 'Batch Name',
			'programmeCode' => 'Programme Code',
			'facultyID' => 'Faculty',
			'ofm_term' => 'Ofm Term',
			'ofm_year' => 'Ofm Year',
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

		$criteria->compare('offeredModuleID',$this->offeredModuleID);
		$criteria->compare('moduleCode',$this->moduleCode,true);
		$criteria->compare('sectionName',$this->sectionName,true);
		$criteria->compare('batchName',$this->batchName);
		$criteria->compare('programmeCode',$this->programmeCode,true);
		$criteria->compare('facultyID',$this->facultyID);
		$criteria->compare('ofm_term',$this->ofm_term,true);
		$criteria->compare('ofm_year',$this->ofm_year);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}