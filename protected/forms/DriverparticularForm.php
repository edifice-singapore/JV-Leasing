<?php

	class DriverParticularForm extends CFormModel
	{

		public $dp_Name;
		public $dp_icno;
		public $dp_occ;
		public $dp_dateBirth;
		public $dp_licPassDate;
		public $dp_maritalStatus;
		public $dp_gender;
		public $dp_relationship;
		public $dp_nationality;
		public $dp_wage;
		public $dp_remarks;
		public $dp_ref;
		public $dp_month;
		public $fk_client_id;



		public function rules()
		{
			return array( array('dp_Name, dp_icno, dp_occ, dp_dateBirth, dp_licPassDate, dp_maritalStatus, dp_gender, dp_relationship, dp_nationality, dp_wage, dp_remarks, dp_ref, dp_month ','required'),
							array('dp_dateBirth, dp_licPassDate', 'date', 'format'=>'yyyy-M-d'),
			);

		}

		public function relations()
		{

		}



	}

?>