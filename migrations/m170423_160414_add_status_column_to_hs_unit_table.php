<?php

use yii\db\Migration;

/**
 * Handles adding status to table `hs_unit`.
 */
class m170423_160414_add_status_column_to_hs_unit_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('hs_unit', 'status', $this->integer());
        $this->addCommentOnColumn('hs_unit', 'status',"1: Active \r\n0: inactive");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('hs_unit', 'status');
    }
}
