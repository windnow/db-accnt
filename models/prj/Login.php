<?php
/**
 * Created by PhpStorm.
 * User: ytzh
 * Date: 16.06.17
 * Time: 1:42
 */

namespace app\models\prj;

use yii\base\Model;
use Yii;

class Login extends Model
{
    public $name;
    public $password;

    public function rules(){
        return [
            [['name', 'password'], 'required'],
            ['password', 'checkPassword']
        ];
    }
    public function checkPassword($attribute){
        if(!$this->hasErrors()) {
            $user = $this->findUser();

            if (!$user || !$user->checkPassword($this))
                $this->addError($attribute, Yii::t('app', 'Имя или пароль указаны не верно'));
        }
    }

    public function findUser(){
        $usr = User::findOne(['name'=>$this->name]);

        if(!$usr){

            $usr = User::findOne(['email'=>$this->name]);
        }

        return $usr;
    }
    public function attributeLabels()
    {
        return [
            'name'=>Yii::t('app', 'Имя'),
            'password'=>Yii::t('app', 'Пароль')
        ];
    }
}
