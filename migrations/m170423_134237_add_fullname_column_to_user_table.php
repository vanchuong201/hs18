<?php

use yii\db\Migration;

/**
 * Handles adding fullname to table `user`.
 */
class m170423_134237_add_fullname_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'fullname', $this->string().' AFTER `username`');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'fullname');
    }
}
