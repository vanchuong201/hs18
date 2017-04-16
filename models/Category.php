<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hs_product_categories".
 *
 * @property integer $id
 * @property integer $p_id
 * @property string $name
 * @property string $short_name
 * @property string $image
 * @property integer $status
 * @property integer $type
 * @property integer $created_at
 * @property integer $created_by
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hs_product_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_id', 'status', 'type', 'created_at', 'created_by'], 'integer'],
            [['name', 'created_at'], 'required'],
            [['name', 'short_name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'p_id' => 'P ID',
            'name' => 'Name',
            'short_name' => 'Short Name',
            'image' => 'Image',
            'status' => 'Status',
            'type' => 'Type',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
