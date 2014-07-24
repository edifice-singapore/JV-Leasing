<?php

/**
 * This is the model class for table "brokers".
 *
 * The followings are the available columns in table 'brokers':
 * @property integer $brokers_id
 * @property string $brokers_name
 * @property string $brokers_contact
 * @property string $brokers_email
 * @property string $brokers_address
 * @property integer $brokers_commission
 * @property string $date
 * @property integer $status
 */
class Brokers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'brokers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('brokers_name, brokers_contact, brokers_email, brokers_address, brokers_commission, date', 'required'),
			array('brokers_commission, status', 'numerical', 'integerOnly'=>true),
			array('brokers_name, brokers_contact, brokers_email, brokers_address', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('brokers_id, brokers_name, brokers_contact, brokers_email, brokers_address, brokers_commission, date, status', 'safe', 'on'=>'search'),
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
			'brokers_id' => 'Brokers',
			'brokers_name' => 'Brokers Name',
			'brokers_contact' => 'Brokers Contact',
			'brokers_email' => 'Brokers Email',
			'brokers_address' => 'Brokers Address',
			'brokers_commission' => 'Brokers Commission',
			'date' => 'Date',
			'status' => 'Status',
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

		$criteria->compare('brokers_id',$this->brokers_id);
		$criteria->compare('brokers_name',$this->brokers_name,true);
		$criteria->compare('brokers_contact',$this->brokers_contact,true);
		$criteria->compare('brokers_email',$this->brokers_email,true);
		$criteria->compare('brokers_address',$this->brokers_address,true);
		$criteria->compare('brokers_commission',$this->brokers_commission);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Brokers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
