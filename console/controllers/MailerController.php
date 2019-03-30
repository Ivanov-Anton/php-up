<?php
namespace console\controllers;


use Yii;

class MailerController extends \yii\console\Controller
{
    public function actionIndex()
    {
        echo 'Hello world!';
        die;
    }
    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('jinsike123@gmail.com ')
            ->setTo('jinsike123@gmail.com')
            ->setSubject('d')
            ->setTextBody('Привет это просто для теста')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();
        var_dump($result);
        die;
    }
}