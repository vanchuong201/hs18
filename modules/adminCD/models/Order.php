<?php

namespace app\modules\adminCD\models;

use Yii;

/**
 * This is the model class for table "hs_orders".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $fullname
 * @property integer $phone
 * @property string $facebook
 * @property string $email
 * @property integer $city_id
 * @property integer $district_id
 * @property string $address
 * @property string $note
 * @property integer $ship
 * @property integer $status
 * @property integer $loss
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hs_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'phone', 'city_id', 'district_id', 'ship', 'status', 'loss', 'created_at', 'created_by', 'updated_at'], 'integer'],
            [['city_id', 'district_id', 'address', 'status'], 'required'],
            [['fullname', 'facebook', 'email', 'address', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'fullname' => 'Fullname',
            'phone' => 'Phone',
            'facebook' => 'Facebook',
            'email' => 'Email',
            'city_id' => 'City ID',
            'district_id' => 'District ID',
            'address' => 'Address',
            'note' => 'Note',
            'ship' => 'Ship',
            'status' => 'Status',
            'loss' => 'Loss',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
        ];
    }
}
