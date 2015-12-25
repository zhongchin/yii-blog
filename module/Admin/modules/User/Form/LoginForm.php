<?php
namespace app\module\Admin\modules\User\Form;


use yii\db\ActiveRecord;

class LoginForm extends  ActiveRecord{
    public $username;
    public $password;

    public function rules(){
        return [
            [["username","password"],"require"],
            [[""]]
        ];
    }

    public function attributeLabels(){
        return [
            "username"=>"用户名",
            "password"=>"密码"
        ];
    }
}