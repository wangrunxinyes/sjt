<?php

namespace frontend\controllers;

use Yii;
use common\controller\BasicController;

class SystemController extends BasicController {

	public $layout = 'frame';

	public function actions() {

		return array(

			// captcha action renders the CAPTCHA image displayed on the contact page

			'captcha' => array(

				'class' => 'CCaptchaAction',

				'backColor' => 0xFFFFFF,

			),

			// page action renders "static" pages stored under 'protected/views/site/pages'

			// They can be accessed via: index.php?r=site/page&view=FileName

			'page' => array(

				'class' => 'CViewAction',

			),

		);

	}

	public function actionError() {

		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest) {
				echo $error['message'];
			} else {
				$this->Render('error', $error);
			}
		} else {
			$this->redirect(Array("/"));
		}
	}

	public function actionIndex() {
		$this->redirect(array("/"));
	}

	public function actionNews() {
		$this->redirect("develop");
// 		return $this->Render('news');
	}
	
	public function actionStudy() {
		$this->redirect("develop");
	}
	
	public function actionFriends() {
		$this->redirect("develop");
	}

	public function actionAbout() {
		return $this->Render('about');
	}

	public function actionTest() {

		$this->RenderPartial('test');

	}

	public function actionAffectionwall() {
		return $this->Render('lovewall');
	}

	public function actionPhoto() {
		$this->RenderPartial("photo");
	}

	public function actionUser() {

		$this->RenderPartial('user');

	}
	
	public function actionDevelop() {
		return $this->render('developping');
	}

	public function actionLogin() {

		if (!defined('CRYPT_BLOWFISH') || !CRYPT_BLOWFISH) {
			throw new CHttpException(500, "This application requires that PHP was compiled with Blowfish support for crypt().");
		}

		$model = new LoginForm;

		// if it is ajax validation request

		if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {

			echo CActiveForm::validate($model);

			Yii::app()->end();

		}

		// collect user input data

		if (isset($_POST['LoginForm'])) {

			$model->attributes = $_POST['LoginForm'];

			// validate user input and redirect to the previous page if valid

			if ($model->validate() && $model->login()) {
				$this->redirect(Yii::app()->user->returnUrl);
			}

		}

		// display the login form

		$this->render('login', array('model' => $model));

	}

	public function actionLogout() {

		Yii::app()->user->logout();

		$this->redirect(Yii::app()->homeUrl);

	}

	public function actionAdmin() {

		$this->layout = "empty";

		$this->render("admin");

	}

	public function actionHtml() {
		$this->layout = "empty";

		$this->render("html");
	}

}
