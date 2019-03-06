<?php

use yii\db\Migration;

/**
 * Class m190306_075018_base_tournaments
 */
class m190306_075018_base_tournaments extends Migration
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
        echo "m190306_075018_base_tournaments cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190306_075018_base_tournaments cannot be reverted.\n";

        return false;
    }
    */
}
