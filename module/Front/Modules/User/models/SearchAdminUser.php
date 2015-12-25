<?php

namespace app\module\Front\Modules\User\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\module\Front\Modules\User\models\AdminUser;

/**
 * SearchAdminUser represents the model behind the search form about `app\module\Front\Modules\User\models\AdminUser`.
 */
class SearchAdminUser extends AdminUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'rid', 'updated_at', 'reset_at', 'status'], 'integer'],
            [['uname', 'pwd', 'email', 'salt', 'regtime', 'lasttime', 'avatar', 'nickname'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AdminUser::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'uid' => $this->uid,
            'regtime' => $this->regtime,
            'lasttime' => $this->lasttime,
            'rid' => $this->rid,
            'updated_at' => $this->updated_at,
            'reset_at' => $this->reset_at,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'uname', $this->uname])
            ->andFilterWhere(['like', 'pwd', $this->pwd])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'salt', $this->salt])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'nickname', $this->nickname]);

        return $dataProvider;
    }
}
