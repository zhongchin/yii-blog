<?php

namespace app\module\Admin\modules\User\models;

use Yii;

/**
 * This is the model class for table "{{%admin}}".
 *
 * @property integer $uid
 * @property string $uname
 * @property string $pwd
 * @property string $email
 * @property string $salt
 * @property string $regtime
 * @property string $lasttime
 * @property string $avatar
 * @property integer $rid
 * @property string $nickname
 * @property integer $updated_at
 * @property integer $reset_at
 * @property integer $status
 */
class AdminUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'uname', 'pwd'], 'required'],
            [['uid', 'rid', 'updated_at', 'reset_at', 'status'], 'integer'],
            [['regtime', 'lasttime'], 'safe'],
            [['uname', 'pwd', 'email', 'salt', 'avatar', 'nickname'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'uname' => 'Uname',
            'pwd' => 'Pwd',
            'email' => 'Email',
            'salt' => 'Salt',
            'regtime' => 'Regtime',
            'lasttime' => 'Lasttime',
            'avatar' => 'Avatar',
            'rid' => 'Rid',
            'nickname' => 'Nickname',
            'updated_at' => 'Updated At',
            'reset_at' => 'Reset At',
            'status' => 'Status',
        ];
    }
}
