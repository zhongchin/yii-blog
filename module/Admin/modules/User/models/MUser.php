<?php

namespace app\module\Admin\modules\User\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property integer $uid
 * @property string $uname
 * @property string $pwd
 * @property string $mobile
 * @property string $email
 * @property string $salt
 * @property string $regtime
 * @property string $lasttime
 * @property string $avatar
 * @property integer $rid
 * @property string $nickname
 */
class MUser extends \yii\db\ActiveRecord
{
    public $username;
    public $confirmPwd;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'uname', 'pwd','username'], 'required'],
            [['uid', 'rid'], 'integer'],
            ["username","IsEmailAndPhone"],
            ["pwd",function($attributes,$params){
                if(strlen($this->$attributes)<6||strlen($this->$attributes)>18){
                    $this->addError($attributes,"请输入长度在6至十八位的密码");
                }
            }],
            ["avatar","file","extensions"=>"png,jpg"],
            [['regtime', 'lasttime'], 'safe'],
            [['uname', 'pwd', 'mobile', 'email', 'salt', 'nickname'], 'string', 'max' => 255]
        ];
    }
       public function upload(){

//           if($this->validate()){
           $app=dirname($_SERVER["DOCUMENT_ROOT"]);
              $this->avatar->saveAs($app."/uploads/cp/avatar/".$this->avatar->baseName . '.' . $this->avatar->extension);
               return true;
//           }
           return false;
       }
    /**
     * 判断属性是邮箱或者手机
     * @param $attribute
     * @param $params
     */
  public function IsEmailAndPhone($attribute,$params){
          if(preg_match("/^[A-Za-zd]+([-_.][A-Za-zd]+)*@([A-Za-zd]+[-.])+[A-Za-zd]{2,5}$/",$this->$attribute)){
              return true;
          }else if(preg_match("/^1[3568][0-9]{8}$/i",$this->$attribute)){
              return true;
          }

          $this->addError($attribute,"请填写合格的邮箱和手机号码");
  }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'uname' => '用户名',
            'username'=>'用户电话或者邮箱',
            'pwd' => '密码',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'salt' => 'Salt',
            'regtime' => 'Regtime',
            'lasttime' => 'Lasttime',
            'avatar' => 'Avatar',
            'rid' => 'Rid',
            'nickname' => 'Nickname',
            "confirmPwd"=>"确认密码"
        ];
    }
}
