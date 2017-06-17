<?php

namespace app\controllers\references;


use app\controllers\AppController;

class RefController extends AppController
{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionNomenclature(){
        $this->checkUser();
        return $this->render('nomenclature');
    }

}