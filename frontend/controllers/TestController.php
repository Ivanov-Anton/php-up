<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        $max = Yii::$app->params['newsMaxInList'];
        $list = Test::getNewsList($max);
        $email = Yii::$app->params['adminEmail'];

    }
}