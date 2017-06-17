<?php
/**
 * Created by PhpStorm.
 * User: ytzh
 * Date: 17.06.17
 * Time: 12:03
 */

namespace app\controllers\docs;


use app\controllers\AppController;

class DocsController extends AppController
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionGoodsin(){
        $this->checkUser();
        return $this->render('goodsin');
    }

}