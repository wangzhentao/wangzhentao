<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\users;

/**
 * UsersSearch represents the model behind the search form about `app\models\users`.
 */
class UsersSearch extends users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'sex', 'pay_points', 'rank_points', 'reg_time', 'last_login', 'visit_count', 'user_rank', 'is_special', 'parent_id', 'flag', 'is_validated'], 'integer'],
            [['email', 'user_name', 'password', 'question', 'answer', 'birthday', 'last_time', 'last_ip', 'ec_salt', 'salt', 'alias', 'msn', 'qq', 'office_phone', 'home_phone', 'mobile_phone', 'passwd_question', 'passwd_answer', 'address'], 'safe'],
            [['user_money', 'frozen_money', 'credit_line'], 'number'],
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
        $query = users::find();

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
            'user_id' => $this->user_id,
            'sex' => $this->sex,
            'birthday' => $this->birthday,
            'user_money' => $this->user_money,
            'frozen_money' => $this->frozen_money,
            'pay_points' => $this->pay_points,
            'rank_points' => $this->rank_points,
            'reg_time' => $this->reg_time,
            'last_login' => $this->last_login,
            'last_time' => $this->last_time,
            'visit_count' => $this->visit_count,
            'user_rank' => $this->user_rank,
            'is_special' => $this->is_special,
            'parent_id' => $this->parent_id,
            'flag' => $this->flag,
            'is_validated' => $this->is_validated,
            'credit_line' => $this->credit_line,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'question', $this->question])
            ->andFilterWhere(['like', 'answer', $this->answer])
            ->andFilterWhere(['like', 'last_ip', $this->last_ip])
            ->andFilterWhere(['like', 'ec_salt', $this->ec_salt])
            ->andFilterWhere(['like', 'salt', $this->salt])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'msn', $this->msn])
            ->andFilterWhere(['like', 'qq', $this->qq])
            ->andFilterWhere(['like', 'office_phone', $this->office_phone])
            ->andFilterWhere(['like', 'home_phone', $this->home_phone])
            ->andFilterWhere(['like', 'mobile_phone', $this->mobile_phone])
            ->andFilterWhere(['like', 'passwd_question', $this->passwd_question])
            ->andFilterWhere(['like', 'passwd_answer', $this->passwd_answer])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
