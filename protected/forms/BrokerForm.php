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

<<<<<<< HEAD
	

=======
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
}