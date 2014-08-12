<?php

class ClientController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionAddForm()
	{
		$this->layout=false;
		$data['model'] = new ClientForm();
		$data['action'] = 'add';
		$this->render('_form',$data);
	}

	public function actionEditForm()
	{

	}
	public function actionIndex()
	{
		$model = new Client;

		$this->render('index',array('model'=>$model));
	}

	public function actionList()
	{
		$this->render('list');
	}

	public function actionAjaxList()
	{
		$this->layout=false;
		$cpage   = (isset($_GET['page']))?$_GET['page']:1;
		$criteria = new CDbCriteria();

		if( !empty($_GET['search_name']) ){
			$criteria->addSearchCondition( 'name', $_GET['search_name'] );
		}

		if( !empty($_GET['search_icPassportNo']) ){
			$criteria->addSearchCondition( 'nric', $_GET['search_icPassportNo'] );
		}

		if( !empty($_GET['search_policyNo']) ){
			$criteria->addSearchCondition( 'policy_id', $_GET['search_policyNo'] );
		}
		if( !empty($_GET['search_vehicleNo']) ){
			$criteria->addSearchCondition( 'policy_id', $_GET['search_vehicleNo'] );
		}	

		$total =  Client::model()->count($criteria);
		$page  = new PaginationLib($total, $cpage, 10);

		$criteria->limit 		= $page->limit();
		$criteria->offset 		= $page->offset();

		$data['client'] = Client::model()->findAll($criteria);
		$data['page'] = $page;

		$this->render('_ajax_list',$data);
	}

	public function actionCreate()
	{
		$model = new Client;
		$this->renderPartial('_form', array('model'=>$model));

	}


	public function actionSave()
	{

		$this->layout=false;
		$json['success'] = false;

		if( !Yii::app()->user->getIsGuest() ){

			$form = new ClientForm('create');
			$error = CActiveForm::validate($form);
			if( $error != '[]' ){

				$json['validation_errors'] = json_decode($error);

			}else{

				$client = new Client();
				$client->name       			= $form->name;
				$client->nick 					= $form->nick;
				$client->address 				= $form->Address;
				$client->postalcode 			= $form->Postalcode;
				$client->nric 					= $form->Nric;
				$client->birthdate 				= $form->Birthdate;
				$client->nationality 			= $form->Nationality;
				$client->res_tel 				= $form->Res_Tel;
				$client->ofc_tel 				= $form->Ofc_Tel;
				$client->mobile  				= $form->Mobile;
				$client->email  				= $form->Email;
				$client->company  				= $form->Company;
				$client->Designation 			= $form->Designation;
				$client->drvlicense_passdate 	= $form->Drvlicense_Passdate;
				$client->policy_id  			= $form->Policy;
				$client->v_model  				= $form->V_Model;
				$client->v_type 			 	= $form->V_Type;
				$client->engine_cap  			= $form->Engine_Cap;
				$client->yr_manufactured  		= $form->Yr_Manufactured;
				$client->reg_date 				= $form->RegDate;
				$client->roadTax_expDate  		= $form->RoadTaxExpDate;
				$client->carPlate  				= $form->CarPlate;
				$client->oldVehcNo  			= $form->OldVehcNo ;
				$client->insuranceCo 	 		= $form->InsuranceCo;
				$client->oldNCD  				= $form->OldNcd ;
				$client->prevExpDate  			= $form->PrevExpDate ;
				$client->covPolicyNo  			= $form->CovPolicyNo;
				$client->covCoverNoteNo  		= $form->CovCoverNoteNo;
				$client->covCoverageType  		= $form->CovCoverageType;
				$client->covPlan  				= $form->CovPlan;
				$client->covGrossPrem  			= $form->CovGrossPrem;
				$client->covNCD  				= $form->CovNcd;
				$client->covExcess  			= $form->CovExcess;
				$client->covWindScrAmnt  		= $form->CovWindScrAmnt;
				$client->covLoadAmnt  			= $form->CovLoadAmnt;
				$client->covPersonalAcc  		= $form->CovPersonalAcc;
				$client->covExtension  			= $form->CovExtension;
				$client->covSurCharge  			= $form->CovSurCharge;
				$client->covOther1  			= $form->CovOther1;
				$client->covOther2  			= $form->CovOther2;
				$client->covOther3  			= $form->CovOther3;
				$client->covLoyaltyDis  		= $form->CovLoyaltyDis;
				$client->covNoClaim  			= $form->CovNoClaim;
				$client->covNCDProtectr  		= $form->CovNcdprotectr;
				$client->covCommDate  			= $form->CovCommDate;
				$client->covExpDate  			= $form->CovExpDate;
				$client->covInsurCo  			= $form->CovInsurCo;
				$client->covTermDate  			= $form->CovTermDate;
				$client->spNameBroker  			= $form->SpNameBroker;
				$client->spAnnualPrem  			= $form->SpAnnualPrem;
				$client->spDiscount  			= $form->SpDiscount;
				$client->spPremDue  			= $form->SpPremDue;
				$client->spGST  				= $form->SpGst;
				$client->spMiscChanges  		= $form->SpMiscChanges;
				$client->spTotalDue  			= $form->SpTotalDue;
				$client->spComm1  				= $form->SpComm1;
				$client->spNetUnderwriter  		= $form->SpNetUnderwriter;
				$client->spFirmComm  			= $form->SpFirmComm;
				$client->spAgentComm  			= $form->SpAgentComm;
				$client->spEarnings  			= $form->SpEarnings;
				$client->spRemarks  			= $form->SpRemarks;
				$client->spPaymentBy  			= $form->SpPaymentBy;
				$client->spReceiptNo  			= $form->SpReceiptNo;
				$client->dpDrverName  			= $form->DpDrverName;
				$client->dpDrverICno  			= $form->DpDrverIcno;
				$client->dpDrverOcc  			= $form->DpDrverOcc;
				$client->dpDateBirth  			= $form->DpDateBirth;
				$client->dpDrverLcnsePass  		= $form->DpDrverLcnsePass;
				$client->dpDrverMarStat  		= $form->DpDrverMarStat;
				$client->dpGender  				= $form->DpGender;
				$client->dpRelationship  		= $form->DpRelationship;
				$client->dpNationality  		= $form->DpNationality;
				$client->dpWage  				= $form->DpWage;
				$client->dpRemarks  			= $form->DpRemarks;
				$client->dpRef  				= $form->DpRef;
				$client->dpMonth  				= $form->DpMonth;
				
				$client->date  			   	 	= date('Y-m-d');
				$client->save();	
				$json['success'] = true;

			}

		}else{

			$json['error'] = 'Ooops! Your session has expired.';

		}
		echo json_encode($json);

	}


}

?>