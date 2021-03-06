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
 * @property integer $ship_costs
 * @property integer $status
 * @property integer $other_costs
 * @property string $note
 * @property integer $seller
 * @property integer $created_by
 * @property integer $created_at
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
            [['user_id', 'phone', 'city_id', 'district_id', 'ship_costs', 'status', 'other_costs', 'seller', 'created_by', 'created_at', 'updated_at'], 'integer'],
            [['city_id', 'district_id', 'address', 'status'], 'required'],
            [['note'], 'string'],
            [['fullname', 'facebook', 'email', 'address'], 'string', 'max' => 255],
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
            'ship_costs' => 'Ship Costs',
            'status' => 'Status',
            'other_costs' => 'Other Costs',
            'note' => 'Note',
            'seller' => 'Seller',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
