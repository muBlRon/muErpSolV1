<?php

/**
 * This is the model class for table "{{faculty}}".
 * * -update --ron--13-05-2013-
 * The followings are the available columns in table '{{faculty}}':
 * @property integer $facultyID
 * @property string $fac_designation
 * @property string $fac_position
 * @property string $fac_joining
 * @property string $fac_leave
 * @property string $fac_loginName
 * @property string $fac_password
 * @property string $fac_accessLevel
 * @property integer $departmentID
 *
 * The followings are the available model relations:
 * @property Batch[] $batches
 * @property Department[] $departments
 * @property Person $faculty
 * @property Department $department
 * @property Moduleregistration[] $moduleregistrations
 * @property Offeredmodule[] $offeredmodules
 * @property School[] $schools
 */
class Faculty extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Faculty the static model class
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
		return '{{faculty}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('facultyID, departmentID', 'numerical', 'integerOnly'=>true),
                    
			array('fac_designation', 'length', 'max'=>19),
			array('fac_position', 'length', 'max'=>25),
			array('fac_loginName', 'length', 'max'=>50),
			array('fac_password', 'length', 'max'=>255),
			array('fac_accessLevel', 'length', 'max'=>1),
			
                      //  array('fac_joining, fac_leave', 'date'),
                        array('fac_loginName, departmentID, fac_joining', 'required'),
                        array('fac_accessLevel', 'in', 'range'=>array('0','1','2','3')),
                        array('fac_designation', 'in', 'range'=>array('Teachers Assistant','Lecturer','Senior Lecturer','Assistant Professor','Associate Professor','Professor')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('facultyID, fac_designation, fac_position, fac_joining, fac_loginName, fac_accessLevel, departmentID', 'safe', 'on'=>'search'),
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
			'batches' => array(self::HAS_MANY, 'Batch', 'bat_advisor'),
			'departments' => array(self::HAS_MANY, 'Department', 'dpt_head'),
			'faculty' => array(self::BELONGS_TO, 'Person', 'facultyID'),
			'department' => array(self::BELONGS_TO, 'Department', 'departmentID'),
			'moduleregistrations' => array(self::HAS_MANY, 'Moduleregistration', 'facultyID'),
			'offeredmodules' => array(self::HAS_MANY, 'Offeredmodule', 'facultyID'),
			'schools' => array(self::HAS_MANY, 'School', 'sch_dean'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'facultyID' => 'FacultyID',
			'fac_designation' => 'Designation',
			'fac_position' => 'Position',
			'fac_joining' => 'Joining',
			'fac_leave' => 'Leave',
			'fac_loginName' => 'Login Name',
			'fac_password' => 'Password',
			'fac_accessLevel' => 'Access Level',
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

		$criteria->compare('facultyID',$this->facultyID);
		$criteria->compare('fac_designation',$this->fac_designation,true);
		
		$criteria->compare('fac_joining',$this->fac_joining,true);
		
		$criteria->compare('fac_loginName',$this->fac_loginName,true);
		
		$criteria->compare('fac_accessLevel',$this->fac_accessLevel,true);
		$criteria->compare('departmentID',$this->departmentID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}