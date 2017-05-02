<?php

use yii\db\Migration;

/**
 * Handles the creation of table `hs_user_profile`.
 */
class m170424_181909_create_hs_user_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    /*
     * @ChuongNV
     * Bảng lưu thông tin user .
     */
    public function up()
    {
        $this->createTable('hs_user_profile', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull()->unique(),
            'full_name' => $this->string(255),
            'alias' => $this->string(255),
            'nickname' => $this->string(255),
            'phone' => $this->string(255),
            'about_me' => $this->text(),
            'note' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('hs_user_profile');
    }
}
