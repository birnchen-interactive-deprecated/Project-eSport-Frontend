<?php

use yii\db\Migration;

/**
 * Class m190228_074605_tournaments
 */
class m190228_074605_tournaments extends Migration
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
        echo "m190228_074605_tournaments cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190228_074605_tournaments cannot be reverted.\n";

        return false;
    }
    */
}
