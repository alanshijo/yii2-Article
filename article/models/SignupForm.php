<?php

namespace app\models;

use yii\base\Model;
class SignupForm extends Model{
    public $username;
    public $password;
    public $confirm_password;
    public function rules()
    {
        return [
            [['username','password','confirm_password'], 'required'],
            [['username','password','confirm_password'], 'string', 'min' => 4, 'max' => 16],
            ['confirm_password', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function signup(){
        $user = new User();
        $user->username = $this->username;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->auth_key = \Yii::$app->security->generateRandomString();
        $user->access_token = \Yii::$app->security->generateRandomString();

        if($user->save()){
            return true;
        }
    }
}