<?php

class ClientForm extends CFormModel
{
	
	public $name;
	public $nick;
	public $address;
	public $postalcode;
	public $nric;
	public $birthdate;
	public $nationality;
	public $res_tel;
	public $ofc_tel;
	public $mobile;
	public $email;
	public $company;
	public $designation;
	public $drvlicense_passdate;
	public $policy_id;
	public $v_model;
	public $v_type;
	public $engine_cap;
	public $yr_manufactured;
	public $reg_date;
	public $roadTax_expDate;
	public $carPlate;
	public $oldVehcNo;
	public $insuranceCo;
	public $oldNCD;
	public $prevExpDate;
	public $covPolicyNo;
	public $covCoverNoteNo;
	public $covCoverageType;
	public $covPlan;
	public $covGrossPrem;
	public $covNCD;
	public $covExcess;
	public $covWindScrAmnt;
	public $covLoadAmnt;
	public $covPersonalAcc;
	public $covExtension;
	public $covSurCharge;
	public $covPassLiab;
	public $covOther1;
	public $covOther2;
	public $covOther3;
	public $covLoyaltyDis;
	public $covNoClaim;
	public $covNCDProtectr;
	public $covCommDate;
	public $covExpDate;
	public $covInsurCo;
	public $covTermDate;
	public $spNameBroker;
	public $spAnnualPrem;
	public $spDiscount;
	public $spDiscountAmount;
	public $spPremDue;
	public $spGST;
	public $spGSTAmount;
	public $spMiscChanges;
	public $spTotalDue;
	public $spComm1;
	public $spNetUnderwriter;
	public $spFirmComm;
	public $spAgentComm;
	public $spEarnings;
	public $spRemarks;
	public $spPaymentBy;
	public $spReceiptNo;
	
	public $dp_Name;
	public $dpDrverICno;
	public $dpDrverOcc;
	public $dpDateBirth;
	public $dpDrverLcnsePass;
	public $dpDrverMarStat;
	public $dpGender;
	public $dpRelationship;
	public $dpNationality;
	public $dpWage;
	public $dpRemarks;
	public $dpRef;
	public $dpMonth;



	public function rules()
	{
		 // = date("Y-m-d", strtotime($birthdate));
		return array(
				array( 'name,nick,address, postalcode,nric,birthdate, nationality, res_tel,ofc_tel, mobile, email, company, designation, drvlicense_passdate,
					policy_id, v_model, v_type, engine_cap, yr_manufactured, reg_date, roadTax_expDate, carPlate, oldVehcNo, insuranceCo, oldNCD , 
					prevExpDate , covPolicyNo, covCoverNoteNo , covCoverageType , covPlan, covGrossPrem , covNCD , covExcess , covWindScrAmnt ,
					covLoadAmnt, covPersonalAcc, covExtension, covSurCharge, covPassLiab, covOther1, covOther2, covOther3, covLoyaltyDis, covNoClaim,
					covNCDProtectr, covCommDate, covExpDate, covInsurCo, covTermDate, spNameBroker, spAnnualPrem, spDiscount, spDiscountAmount, spPremDue, 
					spGST, spGSTAmount, spMiscChanges, spTotalDue, spComm1, spNetUnderwriter, spFirmComm, spAgentComm, spEarnings, spRemarks, spPaymentBy, spReceiptNo','required'),
				
				array('birthdate,drvlicense_passdate,reg_date, roadTax_expDate, prevExpDate', 'date', 'format'=>'yyyy-M-d'),

				//array('email','email'),
			);
	}

	
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'driverParticularItems' => array(self::HAS_MANY, 'Driverparticular', 'fk_client_id', 'together'=>true),
			'brokerItems' => array(self::HAS_MANY, 'Broker', 'brokers_id', 'together'=>true),

		);
	}

}

/*
return array(
				array( 'name, nick, address, postalcode, nric, birthdate, nationality, res_tel, ofc_tel, mobile, email, company, designation, drvlicense_passdate,
		  				 policy_id, v_model, v_type, engine_cap, yr_manufactured, reg_date, roadTax_expDate, carPlate, oldVehcNo, insuranceCo,
		  				 oldNCD , prevExpDate , covPolicyNo , covCoverNoteNo , covCoverageType , covPlan , covGrossPrem , covNCD , covExcess , covWindScrAmnt ,
		  				 covLoadAmnt, covPersonalAcc, covExtension, covSurCharge, covPassLiab, covOther1, covOther2, covOther3, covLoyaltyDis, covNoClaim,
		  				 covNCDProtectr, covCommDate, covExpDate, covInsurCo, covTermDate, spNameBroker, spAnnualPrem, spDiscount, spPremDue,
		  				 spGST, spMiscChanges, spTotalDue, spComm1, spNetUnderwriter, spFirmComm, spAgentComm, spEarnings, spRemarks, spPaymentBy,
		  				 spReceiptNo','required'),
				array('email','email'),
			);*/


?>