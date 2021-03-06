<?php

namespace app\modules\adminCD\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\adminCD\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\modules\adminCD\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quantity_left', 'cat_id', 'status', 'price', 'price_saleoff', 'created_at', 'updated_at', 'created_by'], 'integer'],
            [['name', 'name_admin', 'description'], 'safe'],
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
        $query = Product::find();

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
            'quantity_left' => $this->quantity_left,
            'cat_id' => $this->cat_id,
            'status' => $this->status,
            'price' => $this->price,
            'price_saleoff' => $this->price_saleoff,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'name_admin', $this->name_admin])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
