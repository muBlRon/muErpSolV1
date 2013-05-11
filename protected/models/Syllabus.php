<?php

/**
 * This is the model class for table "{{syllabus}}".
 *
 * The followings are the available columns in table '{{syllabus}}':
 * @property integer $syllabusID
 * @property string $programmeCode
 * @property double $syl_version
 * @property string $syl_startTerm
 * @property integer $syl_startYear
 * @property string $syl_endTerm
 * @property integer $syl_endYear
 * @property integer $syl_maxCreditHour
 * @property string $syl_description
 * @property double $syl_minGPA
 * @property double $syl_maxGPA
 * @property string $syl_approvedDate
 *
 * The followings are the available model relations:
 * @property Module[] $modules
 * @property Programme $programmeCode0
 */
class Syllabus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Syllabus the static model class
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
		return '{{syllabus}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('syllabusID, syl_startYear, syl_endYear, syl_maxCreditHour', 'numerical', 'integerOnly'=>true),
			array('syl_version, syl_minGPA, syl_maxGPA', 'numerical'),
			array('programmeCode', 'length', 'max'=>10),
			array('syl_startTerm, syl_endTerm', 'length', 'max'=>1),
			array('syl_description, syl_approvedDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('syllabusID, programmeCode, syl_version, syl_startTerm, syl_startYear, syl_endTerm, syl_endYear, syl_maxCreditHour, syl_description, syl_minGPA, syl_maxGPA, syl_approvedDate', 'safe', 'on'=>'search'),
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
			'modules' => array(self::HAS_MANY, 'Module', 'syllabusID'),
			'programmeCode0' => array(self::BELONGS_TO, 'Programme', 'programmeCode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'syllabusID' => 'Syllabus',
			'programmeCode' => 'Programme Code',
			'syl_version' => 'Syl Version',
			'syl_startTerm' => 'Syl Start Term',
			'syl_startYear' => 'Syl Start Year',
			'syl_endTerm' => 'Syl End Term',
			'syl_endYear' => 'Syl End Year',
			'syl_maxCreditHour' => 'Syl Max Credit Hour',
			'syl_description' => 'Syl Description',
			'syl_minGPA' => 'Syl Min Gpa',
			'syl_maxGPA' => 'Syl Max Gpa',
			'syl_approvedDate' => 'Syl Approved Date',
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

		$criteria->compare('syllabusID',$this->syllabusID);
		$criteria->compare('programmeCode',$this->programmeCode,true);
		$criteria->compare('syl_version',$this->syl_version);
		$criteria->compare('syl_startTerm',$this->syl_startTerm,true);
		$criteria->compare('syl_startYear',$this->syl_startYear);
		$criteria->compare('syl_endTerm',$this->syl_endTerm,true);
		$criteria->compare('syl_endYear',$this->syl_endYear);
		$criteria->compare('syl_maxCreditHour',$this->syl_maxCreditHour);
		$criteria->compare('syl_description',$this->syl_description,true);
		$criteria->compare('syl_minGPA',$this->syl_minGPA);
		$criteria->compare('syl_maxGPA',$this->syl_maxGPA);
		$criteria->compare('syl_approvedDate',$this->syl_approvedDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}