<?php

namespace app\modules\adminCD\models;

use Yii;

/**
 * This is the model class for table "hs_order_item".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property string $quantity
 * @property integer $unit_id
 * @property integer $price
 * @property integer $price_out
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hs_order_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'quantity', 'unit_id'], 'required'],
            [['order_id', 'product_id', 'unit_id', 'price', 'price_out'], 'integer'],
            [['quantity'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'quantity' => 'Quantity',
            'unit_id' => 'Unit ID',
            'price' => 'Price',
            'price_out' => 'Price Out',
        ];
    }
}
