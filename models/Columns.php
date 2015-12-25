<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%columns}}".
 *
 * @property integer $c_id
 * @property string $c_name
 * @property string $e_name
 * @property integer $sort
 * @property integer $status
 * @property integer $pid
 */
class Columns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%columns}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'c_name', 'e_name', 'sort'], 'required'],
            [['c_id', 'sort', 'status', 'pid'], 'integer'],
            [['c_name', 'e_name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'c_name' => 'C Name',
            'e_name' => 'E Name',
            'sort' => 'Sort',
            'status' => 'Status',
            'pid' => 'Pid',
        ];
    }
}
