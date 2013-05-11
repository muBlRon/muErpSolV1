<?php

/**
 * This is the model class for table "{{module}}".
 *
 * The followings are the available columns in table '{{module}}':
 * @property string $moduleCode
 * @property integer $syllabusID
 * @property string $mod_name
 * @property string $mod_shortName
 * @property double $mod_creditHour
 * @property string $mod_type
 * @property string $mod_labIncluded
 * @property string $mod_mejor
 * @property string $mod_group
 * @property integer $mod_sequence
 *
 * The followings are the available model relations:
 * @property Syllabus $syllabus
 * @property Offeredmodule[] $offeredmodules
 */
class Module extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Module the static model class
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
		return '{{module}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('syllabusID, mod_sequence', 'numerical', 'integerOnly'=>true),
			array('mod_creditHour', 'numerical'),
			array('moduleCode, mod_shortName', 'length', 'max'=>10),
			array('mod_name', 'length', 'max'=>100),
			array('mod_type, mod_labIncluded, mod_mejor', 'length', 'max'=>1),
			array('mod_group', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('moduleCode, syllabusID, mod_name, mod_shortName, mod_creditHour, mod_type, mod_labIncluded, mod_mejor, mod_group, mod_sequence', 'safe', 'on'=>'search'),
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
			'syllabus' => array(self::BELONGS_TO, 'Syllabus', 'syllabusID'),
			'offeredmodules' => array(self::HAS_MANY, 'Offeredmodule', 'moduleCode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'moduleCode' => 'Module Code',
			'syllabusID' => 'Syllabus',
			'mod_name' => 'Mod Name',
			'mod_shortName' => 'Mod Short Name',
			'mod_creditHour' => 'Mod Credit Hour',
			'mod_type' => 'Mod Type',
			'mod_labIncluded' => 'Mod Lab Included',
			'mod_mejor' => 'Mod Mejor',
			'mod_group' => 'Mod Group',
			'mod_sequence' => 'Mod Sequence',
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

		$criteria->compare('moduleCode',$this->moduleCode,true);
		$criteria->compare('syllabusID',$this->syllabusID);
		$criteria->compare('mod_name',$this->mod_name,true);
		$criteria->compare('mod_shortName',$this->mod_shortName,true);
		$criteria->compare('mod_creditHour',$this->mod_creditHour);
		$criteria->compare('mod_type',$this->mod_type,true);
		$criteria->compare('mod_labIncluded',$this->mod_labIncluded,true);
		$criteria->compare('mod_mejor',$this->mod_mejor,true);
		$criteria->compare('mod_group',$this->mod_group,true);
		$criteria->compare('mod_sequence',$this->mod_sequence);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}