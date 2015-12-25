<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%articles}}".
 *
 * @property integer $a_id
 * @property string $title
 * @property string $content
 * @property integer $sort
 * @property string $hotkey
 * @property integer $uid
 * @property integer $is_open
 * @property integer $c_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%articles}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_id', 'title', 'content', 'sort'], 'required'],
            [['a_id', 'sort', 'uid', 'is_open', 'c_id', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['title', 'hotkey'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'title' => 'Title',
            'content' => 'Content',
            'sort' => 'Sort',
            'hotkey' => 'Hotkey',
            'uid' => 'Uid',
            'is_open' => 'Is Open',
            'c_id' => 'C ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
