<?php

/**
 * This is the model class for table "{{examination}}".
 *
 * The followings are the available columns in table '{{examination}}':
 * @property integer $examinationID
 * @property string $exm_type
 * @property string $exm_examTerm
 * @property integer $exm_examYear
 * @property string $exm_startDate
 * @property string $exm_endDate
 * @property string $exm_resultDate
 * @property integer $markingSchameID
 *
 * The followings are the available model relations:
 * @property Moduleregistration[] $tblModuleregistrations
 */
class Examination extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Examination the static model class
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
		return '{{examination}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('exm_examYear, markingSchameID', 'numerical', 'integerOnly'=>true),
			array('exm_type, exm_examTerm', 'length', 'max'=>1),
			array('exm_startDate, exm_endDate, exm_resultDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('examinationID, exm_type, exm_examTerm, exm_examYear, exm_startDate, exm_endDate, exm_resultDate, markingSchameID', 'safe', 'on'=>'search'),
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
			'tblModuleregistrations' => array(self::MANY_MANY, 'Moduleregistration', '{{examregistration}}(examinationID, moduleRegistrationID)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'examinationID' => 'Examination',
			'exm_type' => 'Exm Type',
			'exm_examTerm' => 'Exm Exam Term',
			'exm_examYear' => 'Exm Exam Year',
			'exm_startDate' => 'Exm Start Date',
			'exm_endDate' => 'Exm End Date',
			'exm_resultDate' => 'Exm Result Date',
			'markingSchameID' => 'Marking Schame',
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
		$criteria->compare('exm_type',$this->exm_type,true);
		$criteria->compare('exm_examTerm',$this->exm_examTerm,true);
		$criteria->compare('exm_examYear',$this->exm_examYear);
		$criteria->compare('exm_startDate',$this->exm_startDate,true);
		$criteria->compare('exm_endDate',$this->exm_endDate,true);
		$criteria->compare('exm_resultDate',$this->exm_resultDate,true);
		$criteria->compare('markingSchameID',$this->markingSchameID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}