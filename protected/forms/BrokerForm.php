<?php

class BrokerForm extends CFormModel{

	public $name;
	public $contact;
	public $email;
	public $address;
	public $commission;

	public function rules()
	{
		return array(
				array('name,contact,email,address,commission','required'),
				array('email','email'),
			);
	}

}