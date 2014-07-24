<?php

class Broker extends CActiveRecord{

	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

	public function primaryKey()
	{
	    return 'broker_id';
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'brokers';
	}

}