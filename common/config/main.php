<?php
return [ 
		'vendorPath' => dirname ( dirname ( __DIR__ ) ) . '/vendor',
		'components' => [ 
				'cache' => [ 
						'class' => 'yii\caching\FileCache' 
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
				'db' => [
						'class' => '\yii\db\Connection',
						'dsn' => 'mysql:host=mysql.hostinger.com.hk;dbname=u527756187_main',
						'username' => 'u527756187_fudan',
						'password' => 'wrx52691',
						'charset' => 'utf8'
				],
				'log' => [
						'targets' => [
								[
										'class' => 'yii\log\FileTarget',
										'levels' => [
												'info'
										],
										'categories' => [
												'custom'
										],
										'logFile' => '@app/runtime/logs/custom.log',
				
										'maxFileSize' => 1024 * 2,
										'maxLogFiles' => 20
								],
								[
										'class' => 'yii\log\FileTarget',
										'levels' => [
												'error'
										],
										'logFile' => '@app/runtime/logs/app.log',
				
										'maxFileSize' => 1024 * 2,
										'maxLogFiles' => 20
								]
						]
				],
		] 
];
