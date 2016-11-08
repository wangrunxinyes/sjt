<?php

namespace frontend\modules\api\controllers;

use yii\web\Controller;
use common\models\Visitor;
use common\models\RecordDataUtils;

/**
 * Default controller for the `api` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	echo 'Permission Denied.';
    	exit;
        return $this->render('index');
    }
    
    public function actionClickevent(){
    	$click = new Visitor();
    	$click->ip = RecordDataUtils::getIp ();
    	$click->time = time();
    	$result = array();
    	if($click->save()){
    		$result['result'] = 'true';
    	}else{
    		$result['result'] = 'false';
    	}
    	echo json_encode($result);
    }
}
