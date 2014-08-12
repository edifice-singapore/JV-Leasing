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
 * @property integer $policy_id
 * @property string $v_model
 * @property string $v_type
 * @property string $engine_cap
 * @property string $yr_manufactured
 * @property string $reg_date
 * @property string $roadTax_expDate
 * @property string $carPlate
 * @property string $oldVehcNo
 * @property string $insuranceCo
 * @property string $oldNCD
 * @property string $prevExpDate
 * @property string $covPolicyNo
 * @property string $covCoverNoteNo
 * @property string $covCoverageType
 * @property string $covPlan
 * @property string $covGrossPrem
 * @property string $covNCD
 * @property string $covExcess
 * @property string $covWindScrAmnt
 * @property string $covLoadAmnt
 * @property string $covPersonalAcc
 * @property string $covExtension
 * @property string $covSurCharge
 * @property string $covOther1
 * @property string $covOther2
 * @property string $covOther3
 * @property string $covLoyaltyDis
 * @property integer $covNoClaim
 * @property string $covNCDProtectr
 * @property string $covCommDate
 * @property string $covExpDate
 * @property string $covInsurCo
 * @property string $covTermDate
 * @property integer $spNameBroker
 * @property string $spAnnualPrem
 * @property string $spDiscount
 * @property string $spPremDue
 * @property string $spGST
 * @property string $spMiscChanges
 * @property string $spTotalDue
 * @property string $spComm1
 * @property string $spNetUnderwriter
 * @property string $spFirmComm
 * @property string $spAgentComm
 * @property string $spEarnings
 * @property string $spRemarks
 * @property string $spPaymentBy
 * @property string $spReceiptNo
 * @property string $dpDrverName
 * @property string $dpDrverICno
 * @property string $dpDrverOcc
 * @property string $dpDateBirth
 * @property string $dpDrverLcnsePass
 * @property string $dpDrverMarStat
 * @property integer $dpGender
 * @property string $dpRelationship
 * @property string $dpNationality
 * @property string $dpWage
 * @property string $dpRemarks
 * @property string $dpRef
 * @property string $dpMonth
 */
class Client extends CActiveRecord
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
			array('name, nick, address, postalcode, nric, birthdate, nationality, res_tel, ofc_tel, mobile, email, company, designation, drvlicense_passdate, policy_id, v_model, v_type, engine_cap, yr_manufactured, reg_date, roadTax_expDate, carPlate, oldVehcNo, insuranceCo, oldNCD, prevExpDate, covPolicyNo, covCoverNoteNo, covCoverageType, covPlan, covGrossPrem, covNCD, covExcess, covWindScrAmnt, covLoadAmnt, covPersonalAcc, covExtension, covSurCharge, covOther1, covOther2, covOther3, covLoyaltyDis, covNCDProtectr, covCommDate, covExpDate, covInsurCo, covTermDate, spNameBroker, spAnnualPrem, spDiscount, spDiscountAmount, spPremDue, spGST, spGSTAmount,spMiscChanges, spTotalDue, spComm1, spNetUnderwriter, spFirmComm, spAgentComm, spEarnings, spRemarks, spPaymentBy, spReceiptNo, ','required'),
			array('policy_id, covNoClaim, spNameBroker', 'numerical', 'integerOnly'=>true),
			array('name, address, company, designation, insuranceCo, covNCDProtectr, spPaymentBy', 'length', 'max'=>100),
			array('nick, nationality, covCoverNoteNo, spReceiptNo', 'length', 'max'=>30),
			array('postalcode, nric, covExcess, covWindScrAmnt, covLoadAmnt, covSurCharge, covLoyaltyDis, spAnnualPrem, spDiscount, spGST, spGSTAmount, spMiscChanges, spTotalDue, spComm1, spNetUnderwriter, spFirmComm, spAgentComm, spEarnings', 'length', 'max'=>10),
			array('res_tel, ofc_tel, mobile, engine_cap, yr_manufactured, carPlate, oldVehcNo, oldNCD, covPolicyNo, covPlan', 'length', 'max'=>20),
			array('email, v_model, v_type, covCoverageType, covPersonalAcc, covExtension, covOther1, covOther2, covOther3, covInsurCo', 'length', 'max'=>50),
			array('covGrossPrem, covNCD', 'length', 'max'=>11),
			array('spRemarks', 'length', 'max'=>200),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('client_id, name, nick, address, postalcode, nric, birthdate, nationality, res_tel, ofc_tel, mobile, email, company, designation, drvlicense_passdate, policy_id, v_model, v_type, engine_cap, yr_manufactured, reg_date, roadTax_expDate, carPlate, oldVehcNo, insuranceCo, oldNCD, prevExpDate, covPolicyNo, covCoverNoteNo, covCoverageType, covPlan, covGrossPrem, covNCD, covExcess, covWindScrAmnt, covLoadAmnt, covPersonalAcc, covExtension, covSurCharge, covOther1, covOther2, covOther3, covLoyaltyDis, covNoClaim, covNCDProtectr, covCommDate, covExpDate, covInsurCo, covTermDate, spNameBroker, spAnnualPrem, spDiscount, spDiscountAmount, spPremDue, spGST, spGSTAmount, spMiscChanges, spTotalDue, spComm1, spNetUnderwriter, spFirmComm, spAgentComm, spEarnings, spRemarks, spPaymentBy, spReceiptNo', 'safe', 'on'=>'search'),
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
			'driverParticularItems' => array(self::HAS_MANY, 'Driverparticular', 'fk_client_id', 'together'=>true),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'clients_id' => 'ID',
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
			'policy_id' => 'Policy',
			'v_model' => 'V Model',
			'v_type' => 'V Type',
			'engine_cap' => 'Engine Cap',
			'yr_manufactured' => 'Yr Manufactured',
			'reg_date' => 'Reg Date',
			'roadTax_expDate' => 'Road Tax Exp Date',
			'carPlate' => 'Car Plate',
			'oldVehcNo' => 'Old Vehc No',
			'insuranceCo' => 'Insurance Co',
			'oldNCD' => 'Old Ncd',
			'prevExpDate' => 'Prev Exp Date',
			'covPolicyNo' => 'Cov Policy No',
			'covCoverNoteNo' => 'Cov Cover Note No',
			'covCoverageType' => 'Cov Coverage Type',
			'covPlan' => 'Cov Plan',
			'covGrossPrem' => 'Cov Gross Prem',
			'covNCD' => 'Cov Ncd',
			'covExcess' => 'Cov Excess',
			'covWindScrAmnt' => 'Cov Wind Scr Amnt',
			'covLoadAmnt' => 'Cov Load Amnt',
			'covPersonalAcc' => 'Cov Personal Acc',
			'covExtension' => 'Cov Extension',
			'covSurCharge' => 'Cov Sur Charge',
			'covOther1' => 'Cov Other1',
			'covOther2' => 'Cov Other2',
			'covOther3' => 'Cov Other3',
			'covLoyaltyDis' => 'Cov Loyalty Dis',
			'covNoClaim' => 'Cov No Claim',
			'covNCDProtectr' => 'Cov Ncdprotectr',
			'covCommDate' => 'Cov Comm Date',
			'covExpDate' => 'Cov Exp Date',
			'covInsurCo' => 'Cov Insur Co',
			'covTermDate' => 'Cov Term Date',
			'spNameBroker' => 'Sp Name Broker',
			'spAnnualPrem' => 'Sp Annual Prem',
			'spDiscount' => 'Sp Discount',
			'spDiscountAmount' => 'sp DiscountAmount',
			'spPremDue' => 'Sp Prem Due',
			'spGST' => 'Sp Gst',
			'spGSTAmount' => 'sp GSTAmount',
			'spMiscChanges' => 'Sp Misc Changes',
			'spTotalDue' => 'Sp Total Due',
			'spComm1' => 'Sp Comm1',
			'spNetUnderwriter' => 'Sp Net Underwriter',
			'spFirmComm' => 'Sp Firm Comm',
			'spAgentComm' => 'Sp Agent Comm',
			'spEarnings' => 'Sp Earnings',
			'spRemarks' => 'Sp Remarks',
			'spPaymentBy' => 'Sp Payment By',
			'spReceiptNo' => 'Sp Receipt No',
			
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

		$criteria->compare('clients_id',$this->clients_id);
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
		$criteria->compare('policy_id',$this->policy_id);
		$criteria->compare('v_model',$this->v_model,true);
		$criteria->compare('v_type',$this->v_type,true);
		$criteria->compare('engine_cap',$this->engine_cap,true);
		$criteria->compare('yr_manufactured',$this->yr_manufactured,true);
		$criteria->compare('reg_date',$this->reg_date,true);
		$criteria->compare('roadTax_expDate',$this->roadTax_expDate,true);
		$criteria->compare('carPlate',$this->carPlate,true);
		$criteria->compare('oldVehcNo',$this->oldVehcNo,true);
		$criteria->compare('insuranceCo',$this->insuranceCo,true);
		$criteria->compare('oldNCD',$this->oldNCD,true);
		$criteria->compare('prevExpDate',$this->prevExpDate,true);
		$criteria->compare('covPolicyNo',$this->covPolicyNo,true);
		$criteria->compare('covCoverNoteNo',$this->covCoverNoteNo,true);
		$criteria->compare('covCoverageType',$this->covCoverageType,true);
		$criteria->compare('covPlan',$this->covPlan,true);
		$criteria->compare('covGrossPrem',$this->covGrossPrem,true);
		$criteria->compare('covNCD',$this->covNCD,true);
		$criteria->compare('covExcess',$this->covExcess,true);
		$criteria->compare('covWindScrAmnt',$this->covWindScrAmnt,true);
		$criteria->compare('covLoadAmnt',$this->covLoadAmnt,true);
		$criteria->compare('covPersonalAcc',$this->covPersonalAcc,true);
		$criteria->compare('covExtension',$this->covExtension,true);
		$criteria->compare('covSurCharge',$this->covSurCharge,true);
		$criteria->compare('covOther1',$this->covOther1,true);
		$criteria->compare('covOther2',$this->covOther2,true);
		$criteria->compare('covOther3',$this->covOther3,true);
		$criteria->compare('covLoyaltyDis',$this->covLoyaltyDis,true);
		$criteria->compare('covNoClaim',$this->covNoClaim);
		$criteria->compare('covNCDProtectr',$this->covNCDProtectr,true);
		$criteria->compare('covCommDate',$this->covCommDate,true);
		$criteria->compare('covExpDate',$this->covExpDate,true);
		$criteria->compare('covInsurCo',$this->covInsurCo,true);
		$criteria->compare('covTermDate',$this->covTermDate,true);
		$criteria->compare('spNameBroker',$this->spNameBroker);
		$criteria->compare('spAnnualPrem',$this->spAnnualPrem,true);
		$criteria->compare('spDiscount',$this->spDiscount,true);
		$criteria->compare('spPremDue',$this->spPremDue,true);
		$criteria->compare('spGST',$this->spGST,true);
		$criteria->compare('spGSTAmount',$this->spGSTAmount,true);
		$criteria->compare('spMiscChanges',$this->spMiscChanges,true);
		$criteria->compare('spTotalDue',$this->spTotalDue,true);
		$criteria->compare('spComm1',$this->spComm1,true);
		$criteria->compare('spNetUnderwriter',$this->spNetUnderwriter,true);
		$criteria->compare('spFirmComm',$this->spFirmComm,true);
		$criteria->compare('spAgentComm',$this->spAgentComm,true);
		$criteria->compare('spEarnings',$this->spEarnings,true);
		$criteria->compare('spRemarks',$this->spRemarks,true);
		$criteria->compare('spPaymentBy',$this->spPaymentBy,true);
		$criteria->compare('spReceiptNo',$this->spReceiptNo,true);
		

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

	public function primaryKey()
	{
	    return 'client_id';
	}





}
