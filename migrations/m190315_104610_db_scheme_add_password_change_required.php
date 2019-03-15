<?php

use yii\db\Migration;

/**
 * Class m190315_104610_db_scheme_add_password_change_required
 */
class m190315_104610_db_scheme_add_password_change_required extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{user}}', 'is_password_change_required', 'tinyint(1) default 0');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{user}}', 'is_password_change_required');
    }
}
