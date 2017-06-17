<?php
/**
 * Date: 17.06.17
 * Time: 11:32
 *
 * Реализуются общие функции для всех контроллеров приложения.
 */

namespace app\controllers;


use Yii;
use yii\web\Controller;

class AppController extends Controller
{
    protected function checkUser(){
        if(Yii::$app->user->isGuest)
        {   $this->goHome();}    }

}