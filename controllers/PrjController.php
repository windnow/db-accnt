<?php

namespace app\controllers;

use app\models\prj\Login;
use Yii;
use app\models\prj\Signup;

class PrjController extends AppController
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionSignup(){
        if(!Yii::$app->user->isGuest)
        {   $this->goHome();}

        $model = new Signup();

        /**
         * Вместо того, что бы писать:
         * ------------------------------------------------------------------
         * if(isset($_POST['Signup']))
         *      $model->attributes = Yii::$app->request->post('Signup');
         * ------------------------------------------------------------------
         * обойдемся одним оператором
         */
        if($model->load(Yii::$app->request->post())){
            if($model->validate() && $model->signup()){
                $this->goHome();
            }
        }
        return $this->render('signup', compact('model'));
    }

    public function actionLogin(){
        if(!Yii::$app->user->isGuest) {
            $this->goHome();
        }
        $model = new Login();
        if($model->load(Yii::$app->request->post()))
            if($model->validate()){
		        Yii::$app->user->login($model->findUser());
                $this->goHome();
            }
        return $this->render('login', compact('model'));
    }

    public function actionLogout(){
        if(!Yii::$app->user->isGuest)
            Yii::$app->user->logout();
        $this->goHome();
    }

}
