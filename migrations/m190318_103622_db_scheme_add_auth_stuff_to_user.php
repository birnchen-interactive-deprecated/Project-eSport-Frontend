<?php

use yii\db\Migration;

/**
 * Class m190318_103622_db_scheme_add_auth_stuff_to_user
 */
class m190318_103622_db_scheme_add_auth_stuff_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{user}}', 'access_token', 'VARCHAR(255) NOT NULL');
        $this->addColumn('{{user}}', 'auth_key', 'VARCHAR(255) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{user}}', 'access_token');
        $this->dropColumn('{{user}}', 'auth_key');
    }
}
