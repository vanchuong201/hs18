<?php

namespace app\modules\adminCD\models;

use Yii;

/**
 * This is the model class for table "hs_products".
 *
 * @property integer $id
 * @property string $name
 * @property string $name_admin
 * @property integer $quantity_left
 * @property string $description
 * @property integer $cat_id
 * @property integer $status
 * @property integer $price
 * @property integer $price_saleoff
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hs_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['quantity_left', 'cat_id', 'status', 'price', 'price_saleoff', 'created_at', 'updated_at', 'created_by'], 'integer'],
            [['description'], 'string'],
            [['name', 'name_admin'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'name_admin' => 'Name Admin',
            'quantity_left' => 'Quantity Left',
            'description' => 'Description',
            'cat_id' => 'Cat ID',
            'status' => 'Status',
            'price' => 'Price',
            'price_saleoff' => 'Price Saleoff',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }
}
