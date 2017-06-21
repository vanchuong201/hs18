<?php

namespace app\modules\adminCD\models;

use webvimark\modules\UserManagement\models\User;
use Yii;

/**
 * This is the model class for table "hs_orders".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $full_name
 * @property integer $phone
 * @property string $facebook
 * @property string $email
 * @property integer $city_id
 * @property integer $district_id
 * @property string $address
 * @property integer $amount
 * @property integer $ship_cost
 * @property integer $total
 * @property integer $pay_type
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
            [['user_id', 'phone', 'city_id', 'district_id', 'amount', 'ship_cost', 'total', 'pay_type', 'status', 'other_costs', 'seller', 'created_by', 'created_at', 'updated_at'], 'integer'],
            [['city_id', 'district_id', 'address', 'status'], 'required'],
            [['note'], 'string'],
            [['full_name', 'facebook', 'email', 'address'], 'string', 'max' => 255],
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
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'facebook' => 'Facebook',
            'email' => 'Email',
            'city_id' => 'City ID',
            'district_id' => 'District ID',
            'address' => 'Address',
            'amount' => 'Amount',
            'ship_cost' => 'Ship Cost',
            'total' => 'Total',
            'pay_type' => 'Pay Type',
            'status' => 'Status',
            'other_costs' => 'Other Costs',
            'note' => 'Note',
            'seller' => 'Seller',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getUser_(){
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }
}
