<?php

namespace app\module\Front\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{

    public function actionIndex()
    {
        \Yii::$app->user->isGuest;
        return $this->render('index');
    }
}
