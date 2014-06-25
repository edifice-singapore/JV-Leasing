<?php

/**
 * This is the model class for table "clients".
 *
 * The followings are the available columns in table 'clients':
 * @property integer $id
 * @property string $name
 * @property string $nick
 * @property string $address
 * @property string $postalcode
 * @property string $nric
 * @property string $birthdate
 * @property string $nationality
 * @property string $res_tel
 * @property string $ofc_tel
 * @property string $mobile
 * @property string $email
 * @property string $company
 * @property string $designation
 * @property string $drvlicense_passdate
 */
class Clients extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name, nick, address, postalcode, nric, birthdate, nationality, res_tel, ofc_tel, mobile, email, company, designation, drvlicense_passdate', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('name, address, company, designation', 'length', 'max'=>100),
			array('nick, nationality', 'length', 'max'=>30),
			array('postalcode, nric', 'length', 'max'=>10),
			array('res_tel, ofc_tel, mobile', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, nick, address, postalcode, nric, birthdate, nationality, res_tel, ofc_tel, mobile, email, company, designation, drvlicense_passdate', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'nick' => 'Nick',
			'address' => 'Address',
			'postalcode' => 'Postalcode',
			'nric' => 'Nric',
			'birthdate' => 'Birthdate',
			'nationality' => 'Nationality',
			'res_tel' => 'Res Tel',
			'ofc_tel' => 'Ofc Tel',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'company' => 'Company',
			'designation' => 'Designation',
			'drvlicense_passdate' => 'Drvlicense Passdate',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nick',$this->nick,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('postalcode',$this->postalcode,true);
		$criteria->compare('nric',$this->nric,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('res_tel',$this->res_tel,true);
		$criteria->compare('ofc_tel',$this->ofc_tel,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('designation',$this->designation,true);
		$criteria->compare('drvlicense_passdate',$this->drvlicense_passdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clients the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
