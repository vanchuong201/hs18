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
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
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
            'name' => 'Tến sản phẩm',
            'name_admin' => 'Tên sản phẩm cho admin',
            'quantity_left' => 'Tồn kho',
            'description' => 'Mô tả sản phẩm',
            'cat_id' => 'Danh mục',
            'status' => 'Trạng thái',
            'price' => 'Giá',
            'price_saleoff' => 'Giá KM',
            'created_at' => 'Thời gian tạo',
            'updated_at' => 'Thời gian cập nhật',
            'created_by' => 'Người tạo',
        ];
    }
    public static function getStatusList()
    {
        return array(
            self::STATUS_INACTIVE => 'Không kích hoạt',
            self::STATUS_ACTIVE => 'Kích hoạt',
        );
    }

    public function getCateById(){
        return $this->hasOne(Category::className(),['id'=>'cat_id']);
    }
}
