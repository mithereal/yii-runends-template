<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'yii with runends',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
//            'application.modules.user.models.*',  //yii user management
//            'application.modules.rights.*',  //rights rbac
//            'application.modules.rights.components.*', //rights rbac
	),
/*
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'user' => array(
      'debug' => true,
      ),
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'12345',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                     'generatorPaths' => array(
                    'ext.giix-core', 
                    'ext.giix-components', 
                    'ext.gtc',
                    'ext.gii-template-collection-develop.components',
                    'ext.gii-template-collection-develop.fullModel',
                    'ext.gii-template-collection-develop.fullCrud'
                ),
		),
                    'rights'=>array(
                    'install'=>true,
                    ),
		
	),
*/
	// application components
	'components'=>array(
            'cache' => array('class' => 'system.caching.CDummyCache'),
            //'s3' => array(
	    	//'class' => 'ext.s3.ES3',
	    	//'aKey'=>getenv('AWS_ACCESS_KEY'), 
	  		//'sKey'=>getenv('AWS_SECRET'),
	  	//),
            'user' => array(
            // enable cookie-based authentication
//            'class' => 'RWebUser',   //rights rbac
//            'class' => 'application.modules.user.components.YumWebUser', //yii user management
//            'loginUrl' => array('//user/user/login'), //yii user management
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=dbname',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
                        'tablePrefix' => '',
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
					'levels'=>'error, warning, info'
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
    
    'behaviors'=>array(
		'runEnd'=>array(
		'class'=>'application.components.WebApplicationEndBehavior',
    ),
),
//    'session' => array(
//        'sessionName' => 'SiteSession',
//        'class' => 'CHttpSession',
//        'autoStart' => true,
//        ),
);
