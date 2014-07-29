<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SublimeTextController extends Controller {

	public function actionWrite($what) {
		header("Content-Type: text/plain");
		$view = file_get_contents(Yii::getAlias('@app/views/sublimeText/modules/' . $what . ".php"));
		echo $view;
	}

	public function actionPlugin() {

		echo $this->render("plugin", [
			"dir" => new \DirectoryIterator(Yii::getAlias('@app/views/sublimeText/modules'))
			]);

	}
}