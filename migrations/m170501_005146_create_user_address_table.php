<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_address`.
 */
class m170501_005146_create_user_address_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_address', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'province' => $this->integer(11),
            'district' => $this->integer(11),
            'address' => $this->text(),
            'note' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_address');
    }
}
