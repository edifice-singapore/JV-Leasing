<?php

/**
 * This is the model class for table "driverparticular".
 *
 * The followings are the available columns in table 'driverparticular':
 * @property integer $dp_id
 * @property string $dp_Name
 * @property string $dp_icno
 * @property string $dp_occ
 * @property string $dp_dateBirth
 * @property string $dp_licPassDate
 * @property string $dp_maritalStatus
 * @property integer $dp_gender
 * @property string $dp_relationship
 * @property string $dp_nationality
<<<<<<< HEAD
 * @property integer $dp_wage
 * @property string $dp_remarks
 * @property string $dp_ref
 * @property string $dp_month
 * @property integer $fk_client_id
=======
 * @property string $dp_wage
 * @property string $dp_remarks
 * @property string $dp_ref
 * @property string $dp_month
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
 */
class Driverparticular extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'driverparticular';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
<<<<<<< HEAD
			array('fk_client_id', 'required'),
			array('dp_gender, dp_wage, fk_client_id', 'numerical', 'integerOnly'=>true),
			array('dp_Name, dp_remarks, dp_ref', 'length', 'max'=>100),
			array('dp_icno, dp_occ', 'length', 'max'=>30),
			array('dp_maritalStatus', 'length', 'max'=>10),
			array('dp_relationship, dp_nationality', 'length', 'max'=>50),
			array('dp_month', 'length', 'max'=>25),
			array('dp_dateBirth, dp_licPassDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dp_id, dp_Name, dp_icno, dp_occ, dp_dateBirth, dp_licPassDate, dp_maritalStatus, dp_gender, dp_relationship, dp_nationality, dp_wage, dp_remarks, dp_ref, dp_month, fk_client_id', 'safe', 'on'=>'search'),
=======
			array('dp_Name, dp_icno, dp_occ, dp_dateBirth, dp_licPassDate, dp_maritalStatus, dp_gender, dp_relationship, dp_nationality, dp_wage, dp_remarks, dp_ref, dp_month', 'required'),
			array('dp_gender', 'numerical', 'integerOnly'=>true),
			array('dp_Name, dp_remarks', 'length', 'max'=>100),
			array('dp_icno, dp_occ', 'length', 'max'=>30),
			array('dp_maritalStatus, dp_wage', 'length', 'max'=>10),
			array('dp_relationship', 'length', 'max'=>20),
			array('dp_nationality, dp_ref', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dp_id, dp_Name, dp_icno, dp_occ, dp_dateBirth, dp_licPassDate, dp_maritalStatus, dp_gender, dp_relationship, dp_nationality, dp_wage, dp_remarks, dp_ref, dp_month', 'safe', 'on'=>'search'),
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dp_id' => 'Dp',
			'dp_Name' => 'Dp Name',
			'dp_icno' => 'Dp Icno',
			'dp_occ' => 'Dp Occ',
			'dp_dateBirth' => 'Dp Date Birth',
			'dp_licPassDate' => 'Dp Lic Pass Date',
			'dp_maritalStatus' => 'Dp Marital Status',
			'dp_gender' => 'Dp Gender',
			'dp_relationship' => 'Dp Relationship',
			'dp_nationality' => 'Dp Nationality',
			'dp_wage' => 'Dp Wage',
			'dp_remarks' => 'Dp Remarks',
			'dp_ref' => 'Dp Ref',
			'dp_month' => 'Dp Month',
<<<<<<< HEAD
			'fk_client_id' => 'Fk Client',
=======
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('dp_id',$this->dp_id);
		$criteria->compare('dp_Name',$this->dp_Name,true);
		$criteria->compare('dp_icno',$this->dp_icno,true);
		$criteria->compare('dp_occ',$this->dp_occ,true);
		$criteria->compare('dp_dateBirth',$this->dp_dateBirth,true);
		$criteria->compare('dp_licPassDate',$this->dp_licPassDate,true);
		$criteria->compare('dp_maritalStatus',$this->dp_maritalStatus,true);
		$criteria->compare('dp_gender',$this->dp_gender);
		$criteria->compare('dp_relationship',$this->dp_relationship,true);
		$criteria->compare('dp_nationality',$this->dp_nationality,true);
<<<<<<< HEAD
		$criteria->compare('dp_wage',$this->dp_wage);
		$criteria->compare('dp_remarks',$this->dp_remarks,true);
		$criteria->compare('dp_ref',$this->dp_ref,true);
		$criteria->compare('dp_month',$this->dp_month,true);
		$criteria->compare('fk_client_id',$this->fk_client_id);
=======
		$criteria->compare('dp_wage',$this->dp_wage,true);
		$criteria->compare('dp_remarks',$this->dp_remarks,true);
		$criteria->compare('dp_ref',$this->dp_ref,true);
		$criteria->compare('dp_month',$this->dp_month,true);
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Driverparticular the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
