<?php

/**
 * -update --ron--14-05-2013-
 * This is the model class for table "{{school}}".
 *
 * The followings are the available columns in table '{{school}}':
 * @property string $sch_code
 * @property string $sch_name
 * @property string $sch_remarks
 * @property integer $sch_dean
 * @property string $sch_deanStatus
 * @property integer $schoolID
 *
 * The followings are the available model relations:
 * @property Department[] $departments
 * @property Faculty $schDean
 */
class School extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return School the static model class
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
		return '{{school}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
                        array('sch_code, sch_name', 'required'),
			array('sch_code, sch_name', 'unique'),
			
                        array('sch_code', 'length', 'max'=>10),
			array('sch_name', 'length', 'max'=>100),
                        
                    array('sch_dean', 'numerical', 'integerOnly'=>true),
			array('sch_deanStatus', 'length', 'max'=>14),
			array('sch_remarks', 'safe'),
                    
                        array('sch_deanStatus', 'in', 'range'=>array('Dean', 'Dean in Charge')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sch_code, sch_name, schoolID', 'safe', 'on'=>'search'),
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
			'departments' => array(self::HAS_MANY, 'Department', 'schoolID'),
			'schDean' => array(self::BELONGS_TO, 'Faculty', 'sch_dean'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sch_code' => 'Code',
			'sch_name' => 'Name',
			'sch_remarks' => 'Remarks',
			'sch_dean' => 'Dean',
			'sch_deanStatus' => 'Dean Status',
			'schoolID' => 'School',
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

		$criteria->compare('sch_code',$this->sch_code,true);
		$criteria->compare('sch_name',$this->sch_name,true);
		
		
		$criteria->compare('schoolID',$this->schoolID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}