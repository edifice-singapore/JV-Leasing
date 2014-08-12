<?php

class ClientController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','save'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','renew','list','AjaxList','AjaxRenew','_ajax_renew'),
				'users'=>array('admin','bryan'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionList()
	{
		$this->render('list');
	}

	public function actionAjaxList()
	{
		
		// Search 
		//  Name -> name
		//  IC/ Passport No. : -> 
		// 	Work Permit No. : -> 
		//  Policy No. :  ->
		//	Vehicle No. : -> 
		$this->layout=false;
		$cpage   = (isset($_GET['page']))?$_GET['page']:1;
		$criteria = new CDbCriteria();

		if( !empty($_GET['search_name']) ){
			$criteria->addSearchCondition( 'name', $_GET['name'] );
		}

		if( !empty($_GET['search_contact']) ){
			$criteria->addSearchCondition( 'nric', $_GET['search_icPassportNo'] );
		}

		if( !empty($_GET['search_email']) ){
			$criteria->addSearchCondition( 'carPlate', $_GET['search_vehicleNo'] );
		}

		$total =  Client::model()->count($criteria);
		$page  = new PaginationLib($total, $cpage, 10);

		$criteria->limit 		= $page->limit();
		$criteria->offset 		= $page->offset();

		$data['client'] = Client::model()->findAll($criteria);
		$data['page'] = $page;

		$this->render('_ajax_list',$data);
	}


	public function actionAjaxRenew()
	{
		$this->layout=false;
		$criteria = new CDbCriteria();

		$criteria->addSearchCondition('reg_date', '');
		$data['client'] = Client::model()->findAll($criteria);

		$this->render('_ajax_renew',$data);

	}




	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		
		//$data['model'] = new ClientForm();

		//$data['action'] = 'add';
		
		//$model=new Client;
		//$DPmodel=new Driverparticular;
		$data['modelBroker'] = new Broker;
		$data['model'] = new ClientForm();
	 	$data['DPmodel'] = new DriverParticularForm();
		$data['action'] = 'add';
		$data['i'] = 0;
		
		$this->render('_form', $data);

		

	}

	


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//Default index
		/*$dataProvider=new CActiveDataProvider('Clients');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/

		//Redirect index to renew
		$this->actionRenew();


	}

	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Client('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Client']))
			$model->attributes=$_GET['Client'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	// For renewals
	public function actionRenew()
	{
// For input 
	    $model = new Client;
	    $data['model'] = $model;
	    
	    $this->render('renew', $data);


	}

	public function actionSave()
	{

		$this->layout=false;
		$json['success'] = false;

		

		if( !Yii::app()->user->getIsGuest() ){

			$form = new ClientForm('create');
			$formDP = new DriverParticularForm('create');

			$error = CActiveForm::validate($form);
			if( $error != '[]' ){

				$json['validation_errors'] = json_decode($error);

			}else{
				
				$client = new Client();
				$client->name       			= $form->name;
				$client->nick 					= $form->nick;
				$client->address 				= $form->address;
				$client->postalcode 			= $form->postalcode;
				$client->nric 					= $form->nric;
				$client->birthdate 				= $form->birthdate;
				$client->nationality 			= $form->nationality;
				$client->res_tel 				= $form->res_tel;
				$client->ofc_tel 				= $form->ofc_tel;
				$client->mobile  				= $form->mobile;
				$client->email  				= $form->email;
				$client->company  				= $form->company;
				$client->designation 			= $form->designation;
				$client->drvlicense_passdate 	= $form->drvlicense_passdate;
				$client->policy_id  			= $form->policy_id;
				$client->v_model  				= $form->v_model;
				$client->v_type 			 	= $form->v_type;
				$client->engine_cap  			= $form->engine_cap;
				$client->yr_manufactured  		= $form->yr_manufactured;
				$client->reg_date 				= $form->reg_date;
				$client->roadTax_expDate  		= $form->roadTax_expDate;
				$client->carPlate  				= $form->carPlate;
				$client->oldVehcNo  			= $form->oldVehcNo ;
				$client->insuranceCo 	 		= $form->insuranceCo;
				$client->oldNCD  				= $form->oldNCD ;
				$client->prevExpDate  			= $form->prevExpDate ;
				$client->covPolicyNo  			= $form->covPolicyNo;
				$client->covCoverNoteNo  		= $form->covCoverNoteNo;
				$client->covCoverageType  		= $form->covCoverageType;
				$client->covPlan  				= $form->covPlan;
				$client->covGrossPrem  			= $form->covGrossPrem;
				$client->covNCD  				= $form->covNCD;
				$client->covExcess  			= $form->covExcess;
				$client->covWindScrAmnt  		= $form->covWindScrAmnt;
				$client->covLoadAmnt  			= $form->covLoadAmnt;
				$client->covPersonalAcc  		= $form->covPersonalAcc;
				$client->covExtension  			= $form->covExtension;
				$client->covSurCharge  			= $form->covSurCharge;
				$client->covPassLiab			= $form->covPassLiab;
				$client->covOther1  			= $form->covOther1;
				$client->covOther2  			= $form->covOther2;
				$client->covOther3  			= $form->covOther3;
				$client->covLoyaltyDis  		= $form->covLoyaltyDis;
				$client->covNoClaim  			= $form->covNoClaim;
				$client->covNCDProtectr  		= $form->covNCDProtectr;
				$client->covCommDate  			= $form->covCommDate;
				$client->covExpDate  			= $form->covExpDate;
				$client->covInsurCo  			= $form->covInsurCo;
				$client->covTermDate  			= $form->covTermDate;
				$client->spNameBroker  			= $form->spNameBroker;
				$client->spAnnualPrem  			= $form->spAnnualPrem;
				$client->spDiscount  			= $form->spDiscount;
				$client->spDiscountAmount		= $form->spDiscountAmount;
				$client->spPremDue  			= $form->spPremDue;
				$client->spGST  				= $form->spGST;
				$client->spGSTAmount			= $form->spGSTAmount;
				$client->spMiscChanges  		= $form->spMiscChanges;
				$client->spTotalDue  			= $form->spTotalDue;
				$client->spComm1  				= $form->spComm1;
				$client->spNetUnderwriter  		= $form->spNetUnderwriter;
				$client->spFirmComm  			= $form->spFirmComm;
				$client->spAgentComm  			= $form->spAgentComm;
				$client->spEarnings  			= $form->spEarnings;
				$client->spRemarks  			= $form->spRemarks;
				$client->spPaymentBy  			= $form->spPaymentBy;
				$client->spReceiptNo  			= $form->spReceiptNo;
				
				/*$client->dpDrverName  			= $form->dpDrverName;
				$client->dpDrverICno  			= $form->dpDrverICno;
				$client->dpDrverOcc  			= $form->dpDrverOcc;
				$client->dpDateBirth  			= $form->dpDateBirth;
				$client->dpDrverLcnsePass  		= $form->dpDrverLcnsePass;
				$client->dpDrverMarStat  		= $form->dpDrverMarStat;
				$client->dpGender  				= $form->dpGender;
				$client->dpRelationship  		= $form->dpRelationship;
				$client->dpNationality  		= $form->dpNationality;
				$client->dpWage  				= $form->dpWage;
				$client->dpRemarks  			= $form->dpRemarks;
				$client->dpRef  				= $form->dpRef;
				$client->dpMonth  				= $form->dpMonth;*/


				
				$client->save(false);
				$lastInsertID = $client->primaryKey;	// get last inserted ID in Clients

				// Set table Driver Particulars
				$Driverparticular = new Driverparticular;
				//print_r($_POST['DriverParticularForm']);
				$countItems = count($_POST['DriverParticularForm']['dp_Name']) - 1;
				$arr = 0;
				for ($i=0; $i < $countItems; $i++) { 
				 	
						$Driverparticular->dp_id = null;
						//$Driverparticular->dp_Name  = $countItems;
						$Driverparticular->dp_Name  = $_POST['DriverParticularForm']['dp_Name'][$i]; 
						$Driverparticular->dp_icno = $_POST['DriverParticularForm']['dp_icno'][$i]; 
						$Driverparticular->dp_occ = $_POST['DriverParticularForm']['dp_occ'][$i]; 
						$Driverparticular->dp_dateBirth = $_POST['DriverParticularForm']['dp_dateBirth'][$i];
						$Driverparticular->dp_licPassDate = $_POST['DriverParticularForm']['dp_licPassDate'][$i];
						$Driverparticular->dp_maritalStatus = $_POST['DriverParticularForm']['dp_maritalStatus'][$i];
						$Driverparticular->dp_gender = $_POST['DriverParticularForm']['dp_gender'][$i];
						$Driverparticular->dp_relationship = $_POST['DriverParticularForm']['dp_relationship'][$i];
						$Driverparticular->dp_nationality = $_POST['DriverParticularForm']['dp_nationality'][$i];
						$Driverparticular->dp_wage = $_POST['DriverParticularForm']['dp_wage'][$i];
						$Driverparticular->dp_remarks = $_POST['DriverParticularForm']['dp_remarks'][$i];
						$Driverparticular->dp_ref = $_POST['DriverParticularForm']['dp_ref'][$i];
						$Driverparticular->dp_month = $_POST['DriverParticularForm']['dp_month'][$i];

						$Driverparticular->fk_client_id = $lastInsertID;
						$Driverparticular->isNewRecord = true;
						$Driverparticular->save(false); 
						$arr=$arr+1;
				}
				
				//$client->driverParticularItems->dp_icno = $form->dpDrverICno[$i];
						
						
				//$client->driverParticularItems->dp_icno = dp
				//$client->date = date('Y-m-d');
							   	 	
				


				

/*
				if($client->save())
				{
				    $this->render('index');
				} 
				else
				{
				    throw new CHttpException(404, 'The user already exist.'.$client->primaryKey);
				}
*/		
				$json['success'] = true;

			}

		}else{

			$json['error'] = 'Ooops! Your session has expired.';

		}
		echo json_encode($json);

	}


	public function loadModel($id)
	{
		$model=Client::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Client $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='client-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}



}
