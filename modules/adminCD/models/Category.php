<?php

namespace app\modules\adminCD\models;

use Yii;

/**
 * This is the model class for table "hs_categories".
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
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hs_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_id', 'status', 'type', 'created_at', 'created_by'], 'integer'],
            [['name'], 'required'],
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
            'p_id' => 'Danh mục cha',
            'name' => 'Tên danh mục',
            'short_name' => 'Short Name',
            'image' => 'Image',
            'status' => 'Trạng thái',
            'type' => 'Kiểu danh mục',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }

    public static function getStatusList()
    {
        return array(
            self::STATUS_INACTIVE => 'Không kích hoạt',
            self::STATUS_ACTIVE => 'Kích hoạt',
        );
    }
    static function getAllCate(){
        return self::find()->where(['status'=>self::STATUS_ACTIVE])->all();
    }
}
