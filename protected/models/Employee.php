<?php

/**
 * This is the model class for table "{{employee}}".
 * * -update --ron--13-05-2013-
 * The followings are the available columns in table '{{employee}}':
 * @property integer $employeeID
 * @property string $emp_designations
 * @property string $emp_suppervisoryRole
 * @property string $emp_joining
 * @property string $emp_leave
 * @property string $emp_loginName
 * @property string $emp_password
 * @property string $emp_accessLevel
 * @property string $administrationCode
 *
 * The followings are the available model relations:
 * @property Admission[] $admissions
 * @property Administration $administrationCode0
 * @property Person $employee
 * @property Student[] $students
 * @property Termadmission[] $termadmissions
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
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
		return '{{employee}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employeeID', 'numerical', 'integerOnly'=>true),
			array('emp_designations, emp_suppervisoryRole', 'length', 'max'=>25),
			array('emp_loginName', 'length', 'max'=>50),
			array('emp_password', 'length', 'max'=>255),
			array('emp_accessLevel', 'length', 'max'=>1),
			array('administrationCode', 'length', 'max'=>10),
			
                   //     array('emp_joining, emp_leave', 'date'),
                    
                        array('emp_joining, emp_designations, administrationCode, emp_accessLevel', 'required'),
                        array('emp_accessLevel', 'in', 'range'=>array('0','1','2','3')),
                        array('emp_loginName', 'unique'),
                    
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('employeeID, emp_designations, emp_suppervisoryRole, emp_joining, emp_leave, emp_accessLevel, administrationCode', 'safe', 'on'=>'search'),
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
			'admissions' => array(self::HAS_MANY, 'Admission', 'employeeID'),
			'administrationCode' => array(self::BELONGS_TO, 'Administration', 'administrationCode'),
			'employee' => array(self::BELONGS_TO, 'Person', 'employeeID'),
			'students' => array(self::HAS_MANY, 'Student', 'employeeID'),
			'termadmissions' => array(self::HAS_MANY, 'Termadmission', 'employeeID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'employeeID' => 'EmployeeID',
			'emp_designations' => 'Designations',
			'emp_suppervisoryRole' => 'Suppervisory Role',
			'emp_joining' => 'Joining',
			'emp_leave' => 'Leave',
			'emp_loginName' => 'Login Name',
			'emp_password' => 'Password',
			'emp_accessLevel' => 'Access Level',
			'administrationCode' => 'AdministrationCode',
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

		$criteria->compare('employeeID',$this->employeeID);
		$criteria->compare('emp_designations',$this->emp_designations,true);
		$criteria->compare('emp_suppervisoryRole',$this->emp_suppervisoryRole,true);
		$criteria->compare('emp_joining',$this->emp_joining,true);
		
		$criteria->compare('emp_accessLevel',$this->emp_accessLevel,true);
		$criteria->compare('administrationCode',$this->administrationCode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        
        
}