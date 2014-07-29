<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ReferenceController extends Controller {

	public function actionIndex() {
		echo $this->render("reference");
	}

	public function actionSublimetext() {
		echo $this->render("sublime");
	}

	public function actionBehaviors() {
		echo $this->render("behaviors");
	}

}