<?php

class BrokerController extends Controller
{
	public $layout='//layouts/main';
	public function actionAddForm()
	{
		$this->layout=false;
		$data['model'] = new BrokerForm();
		$data['action'] = 'add';
		$this->render('_form',$data);
	}

	public function actionEditForm()
	{

		$this->layout=false;
		$brokers_id = $_GET['brokers_id'];
		$broker = Broker::model()->findByPk( $brokers_id );
		if( isset($broker) ){

			$data['model'] = new BrokerForm();
			$data['model']->name = $broker->brokers_name;
			$data['model']->commission = $broker->brokers_commission;
			$data['model']->contact = $broker->brokers_contact;
			$data['model']->address = $broker->brokers_address;
			$data['model']->email = $broker->brokers_email;

			$data['action'] = 'edit';
			$data['broker_id'] = $broker->brokers_id;

			$this->render('_form',$data);

		}else{
			echo "Record not found";
		}

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
			$criteria->addSearchCondition( 'brokers_name', $_GET['search_name'] );
		}

		if( !empty($_GET['search_contact']) ){
			$criteria->addSearchCondition( 'brokers_contact', $_GET['search_contact'] );
		}

		if( !empty($_GET['search_email']) ){
			$criteria->addSearchCondition( 'brokers_email', $_GET['search_email'] );
		}

		$total =  Broker::model()->count($criteria);
		$page  = new PaginationLib($total, $cpage, 10);

		$criteria->limit 		= $page->limit();
		$criteria->offset 		= $page->offset();

		$data['brokers'] = Broker::model()->findAll($criteria);
		$data['page'] = $page;

		$this->render('_ajax_list',$data);
	}

	public function actionCreate()
	{

		$this->layout=false;
		$json['success'] = false;

		if( !Yii::app()->user->getIsGuest() ){

			$form = new BrokerForm('create');
			$error = CActiveForm::validate($form);
			if( $error != '[]' ){

				$json['validation_errors'] = json_decode($error);

			}else{

				$broker = new Broker();
				$broker->brokers_name       = $form->name;
				$broker->brokers_contact    = $form->contact;
				$broker->brokers_email      = $form->email;
				$broker->brokers_address    = $form->address;
				$broker->brokers_commission = $form->commission;
				$broker->date  			    = date('Y-m-d');
				$broker->save();
				$json['success'] = true;

			}

		}else{

			$json['error'] = 'Ooops! Your session has expired.';

		}
		echo json_encode($json);

	}

	public function actionUpdate()
	{

		$this->layout=false;
		$json['success'] = false;

		if( !Yii::app()->user->getIsGuest() ){

			$form = new BrokerForm('update');
			$error = CActiveForm::validate($form);
			if( $error != '[]' ){

				$json['validation_errors'] = json_decode($error);

			}else{

				$broker = Broker::model()->findByPk( $_GET['broker_id'] );
				$broker->brokers_name       = $form->name;
				$broker->brokers_contact    = $form->contact;
				$broker->brokers_email      = $form->email;
				$broker->brokers_address    = $form->address;
				$broker->brokers_commission = $form->commission;
				$broker->date  			    = date('Y-m-d');
				$broker->save();
				$json['success'] = true;

			}

		}else{

			$json['error'] = 'Ooops! Your session has expired.';

		}
		echo json_encode($json);
	}

}