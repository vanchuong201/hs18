<?php

use yii\db\Migration;

/**
 * Handles adding unit to table `hs_products`.
 */
class m170423_153818_add_unit_column_to_hs_products_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('hs_products', 'unit', $this->integer(). ' AFTER `description`');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('hs_products', 'unit');
    }
}
