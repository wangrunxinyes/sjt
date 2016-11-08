<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
		'id' => 'app-backend',
		'basePath' => dirname ( __DIR__ ),
		'controllerNamespace' => 'backend\controllers',
		'bootstrap' => [ 
				'log',
				'gii' 
		],
		'modules' => [ ],
		'modules' => [ 
				'admin' => [ 
						'class' => 'backend\modules\admin\admin' 
				],
				'gii' => [ 
						'class' => 'yii\gii\Module' 
				] 
		],
		'components' => [ 
				'user' => [ 
						'identityClass' => 'common\models\User',
						'enableAutoLogin' => true 
				],
				'log' => [ 
						'traceLevel' => YII_DEBUG ? 3 : 0,
						'targets' => [ 
								[ 
										'class' => 'yii\log\FileTarget',
										'levels' => [ 
												'error',
												'warning' 
										] 
								] 
						] 
				],
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				],
				'db' => [
						'class' => '\yii\db\Connection',
						'dsn' => 'mysql:host=mysql.hostinger.com.hk;dbname=u527756187_main',
						'username' => 'u527756187_fudan',
						'password' => 'wrx52691',
						'charset' => 'utf8'
				],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
		'params' => $params 
];
