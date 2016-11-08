<?php

namespace common\controller;

use yii\web\Controller;

class BasicController extends Controller {
	public function afterAction($action, $result) {
		return parent::afterAction($action, $result);
	}
}

?>