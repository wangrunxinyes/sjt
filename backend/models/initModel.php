<?php 

namespace backend\models;
use Yii;

class initModel{
	
	private $sqlArr;
	
	function __construct(){
		$this->sqlArr = array();
		
		//create user table;
		$this->sqlArr['create user table'] = '
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` smallint(10) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);';
		
	}
	
	public function init(){
		$process = array();
		foreach ($this->sqlArr as $key=>$sql){
			$result = Yii::$app->db->createCommand($sql)->execute();
			$process[$key] = $result;
		}
		return $process;
	}
}

?>