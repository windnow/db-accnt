<?php

namespace app\models\prj;

use Yii;
use yii\base\Model;

class Signup extends Model
{
    public $name;
    public $email;
    public $pasHash;

    public function rules()
    {
        return [
            [['email', 'name', 'pasHash'], 'required'],
            ['email', 'email'],
            ['email', 'unique','targetClass'=>'app\models\prj\User','message'=>Yii::t('app','Адрес занят')],
            ['name', 'unique','targetClass'=>'app\models\prj\User', 'message'=>Yii::t('app','Имя занято')],
            ['pasHash', 'string', 'min'=>6, 'max'=>32]
        ];
    }

    public function attributeLabels()
{
    return [
        'name'=>Yii::t('app', 'Имя'),
        'email'=>Yii::t('app', 'Эл. адрес'),
        'pasHash'=>Yii::t('app', 'Пароль')
    ];
}

    public function signup(){
        $user = new User();
        return $user->saveUser($this);

    }
}