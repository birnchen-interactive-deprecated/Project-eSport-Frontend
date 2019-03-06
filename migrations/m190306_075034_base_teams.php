<?php

use yii\db\Migration;

/**
 * Class m190306_075034_base_teams
 */
class m190306_075034_base_teams extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190306_075034_base_teams cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190306_075034_base_teams cannot be reverted.\n";

        return false;
    }
    */
}
