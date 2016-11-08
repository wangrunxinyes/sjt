<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
		'id' => 'app-frontend',
		'basePath' => dirname ( __DIR__ ),
		'bootstrap' => [ 
				'log' 
		],
		'controllerNamespace' => 'frontend\controllers',
		'modules' => [
				'api' => [
						'class' => 'frontend\modules\api\api'
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
				'request' => [ 
						'class' => 'common\components\Request',
						'web' => '/frontend/web' 
				],
				'urlManager' => [ 
						'enablePrettyUrl' => true,
						'showScriptName' => false,
						'rules' => [ 
								'' => 'site/index',
								// 'test/index/<id:\d+>/<page:\d+>'=>'test/index',
								// 'test/index/<id:\d+>/<cate>'=>'test/index',
								'<_a:(test|test2)>/<id:\d+>' => '<_a>/index' 
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
    ],
		'params' => $params 
];
