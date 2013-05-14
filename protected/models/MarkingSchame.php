<?php

/**
 * This is the model class for table "{{markingschame}}".
 *
 * The followings are the available columns in table '{{markingschame}}':
 * @property integer $markingSchameID
 * @property string $mrs_versionNo
 * @property integer $mrs_attendance
 * @property integer $mrs_classTest
 * @property integer $mrs_midTerm
 * @property integer $mrs_final
 * @property string $mrs_startTerm
 * @property integer $mrs_startYear
 * @property string $mrs_endTerm
 * @property integer $mrs_endYear
 * @property string $mrs_gradingSchemeName
 *
 * The followings are the available model relations:
 * @property Moduleregistration[] $moduleregistrations
 */
class MarkingSchame extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MarkingSchame the static model class
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
		return '{{markingschame}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('markingSchameID, mrs_attendance, mrs_classTest, mrs_midTerm, mrs_final, mrs_startYear, mrs_endYear', 'numerical', 'integerOnly'=>true),
			array('mrs_versionNo', 'length', 'max'=>10),
			array('mrs_startTerm, mrs_endTerm', 'length', 'max'=>1),
			array('mrs_gradingSchemeName', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('markingSchameID, mrs_versionNo, mrs_attendance, mrs_classTest, mrs_midTerm, mrs_final, mrs_startTerm, mrs_startYear, mrs_endTerm, mrs_endYear, mrs_gradingSchemeName', 'safe', 'on'=>'search'),
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
			'moduleregistrations' => array(self::HAS_MANY, 'Moduleregistration', 'markingSchameID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'markingSchameID' => 'Marking Schame',
			'mrs_versionNo' => 'Mrs Version No',
			'mrs_attendance' => 'Mrs Attendance',
			'mrs_classTest' => 'Mrs Class Test',
			'mrs_midTerm' => 'Mrs Mid Term',
			'mrs_final' => 'Mrs Final',
			'mrs_startTerm' => 'Mrs Start Term',
			'mrs_startYear' => 'Mrs Start Year',
			'mrs_endTerm' => 'Mrs End Term',
			'mrs_endYear' => 'Mrs End Year',
			'mrs_gradingSchemeName' => 'Mrs Grading Scheme Name',
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

		$criteria->compare('markingSchameID',$this->markingSchameID);
		$criteria->compare('mrs_versionNo',$this->mrs_versionNo,true);
		$criteria->compare('mrs_attendance',$this->mrs_attendance);
		$criteria->compare('mrs_classTest',$this->mrs_classTest);
		$criteria->compare('mrs_midTerm',$this->mrs_midTerm);
		$criteria->compare('mrs_final',$this->mrs_final);
		$criteria->compare('mrs_startTerm',$this->mrs_startTerm,true);
		$criteria->compare('mrs_startYear',$this->mrs_startYear);
		$criteria->compare('mrs_endTerm',$this->mrs_endTerm,true);
		$criteria->compare('mrs_endYear',$this->mrs_endYear);
		$criteria->compare('mrs_gradingSchemeName',$this->mrs_gradingSchemeName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}