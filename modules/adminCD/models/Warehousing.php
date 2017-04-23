<?php

namespace app\modules\adminCD\models;

use Yii;

/**
 * This is the model class for table "hs_warehousing_logs".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $quantity
 * @property integer $imported_at
 * @property integer $imported_by
 * @property string $note
 * @property integer $created_at
 * @property integer $created_by
 */
class Warehousing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hs_warehousing_logs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'quantity', 'imported_at', 'created_at'], 'required'],
            [['product_id', 'quantity', 'imported_at', 'imported_by', 'created_at', 'created_by'], 'integer'],
            [['note'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'ID sản phẩm',
            'quantity' => 'Số lượng',
            'imported_at' => 'Thời gian nhập',
            'imported_by' => 'Người nhập',
            'note' => 'Ghi chú',
            'created_at' => 'Thời giant tạo',
            'created_by' => 'Người tạo',
        ];
    }

    public function getProductWare(){
        return $this->hasOne(Product::className(), ['id'=> 'product_id']);
    }
}
