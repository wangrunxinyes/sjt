<?php 
namespace common\models;

use common\models\WActiveRecord;

/**
 * Visitor model
 *
 * @property integer id
 * @property string ip
 * @property int time
 */
class Visitor extends WActiveRecord{
	
	function __construct(){
		parent::__construct();
		$this->attributes = [
				'ip'=>['request', 'string'],
				'time'=>['request', 'int'],
		];
	}
	
	public static function tableName()
	{
		return '{{%fudan_visitor}}';
	}
	public static function tableNameString() {
		return 'fudan_visitor';
	}
}


?>