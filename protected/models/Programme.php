<?php

/**
 * This is the model class for table "{{programme}}".
 *
 * The followings are the available columns in table '{{programme}}':
 * @property string $programmeCode
 * @property string $pro_name
 * @property integer $pro_totalTerms
 * @property string $pro_remarks
 * @property string $pro_type
 * @property string $pro_medium
 * @property integer $departmentID
 *
 * The followings are the available model relations:
 * @property Batch[] $batches
 * @property Department $department
 * @property Student[] $students
 * @property Syllabus[] $syllabuses
 */
class Programme extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Programme the static model class
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
		return '{{programme}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_totalTerms, departmentID', 'numerical', 'integerOnly'=>true),
			array('programmeCode', 'length', 'max'=>10),
			array('pro_name', 'length', 'max'=>100),
			array('pro_type', 'length', 'max'=>13),
			array('pro_medium', 'length', 'max'=>7),
			array('pro_remarks', 'safe'),
                    
                        array('pro_name, programmeCode, pro_type, pro_medium, pro_totalTerms', 'required'),
                            
                        array('pro_type', 'in', 'range'=>array('deploma', 'undergraduate', 'postgraduate')),
                        array('pro_medium', 'in', 'range'=>array('English', 'Bangla', 'Bilingual')),
                        // The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('programmeCode, pro_name, pro_totalTerms, pro_remarks, pro_type, pro_medium, departmentID', 'safe', 'on'=>'search'),
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
			'batches' => array(self::HAS_MANY, 'Batch', 'programmeCode'),
			'department' => array(self::BELONGS_TO, 'Department', 'departmentID'),
			'students' => array(self::HAS_MANY, 'Student', 'programmeCode'),
			'syllabuses' => array(self::HAS_MANY, 'Syllabus', 'programmeCode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'programmeCode' => 'Programme Code',
			'pro_name' => 'Name',
			'pro_totalTerms' => 'Total Terms',
			'pro_remarks' => 'Remarks',
			'pro_type' => 'Type',
			'pro_medium' => 'Medium',
			'departmentID' => 'DepartmentID',
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

		$criteria->compare('programmeCode',$this->programmeCode,true);
		$criteria->compare('pro_name',$this->pro_name,true);
		$criteria->compare('pro_totalTerms',$this->pro_totalTerms);
		$criteria->compare('pro_remarks',$this->pro_remarks,true);
		$criteria->compare('pro_type',$this->pro_type,true);
		$criteria->compare('pro_medium',$this->pro_medium,true);
		$criteria->compare('departmentID',$this->departmentID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}