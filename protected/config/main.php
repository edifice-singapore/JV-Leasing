<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'JV Leasing',
	'defaultController' => 'site/login',

	// preloading 'log' component
	'preload'=>array('log','htmltableui'),
	// preloading with extensions
	//'preload'=>array('log','htmltableui'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.forms.*',
		'application.libs.*',
		'application.widgets.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'gii',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1','192.168.1.34'),
		),

	),
	//Default controller;
	//'defaultController' => 'site/login',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,

		),


		'jqgrid'=>array('class'=>'ext.jqgrid'),


		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),




	/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
	*/
		// uncomment the following to use a MySQL database

		//for local settings

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=_jvleasing',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
<<<<<<< HEAD
			//'enableParamLogging' => true,
=======
>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
		),


		//for developmental settings
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=jvs_jvleasing',
			'emulatePrepare' => true,
			'username' => 'jvs_root',
			'password' => 'jvs12312',
			'charset' => 'utf8',
		),

		*/




		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'listPerPage'=> 10,
	),



);