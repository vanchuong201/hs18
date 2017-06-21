<?php

namespace app\modules\adminCD\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\adminCD\models\Order;

/**
 * OrderSearch represents the model behind the search form about `app\modules\adminCD\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'phone', 'city_id', 'district_id', 'amount', 'ship_cost', 'total', 'pay_type', 'status', 'other_costs', 'seller', 'created_by', 'created_at', 'updated_at'], 'integer'],
            [['full_name', 'facebook', 'email', 'address', 'note'], 'safe'],
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
        $query = Order::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'phone' => $this->phone,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id,
            'amount' => $this->amount,
            'ship_cost' => $this->ship_cost,
            'total' => $this->total,
            'pay_type' => $this->pay_type,
            'status' => $this->status,
            'other_costs' => $this->other_costs,
            'seller' => $this->seller,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
