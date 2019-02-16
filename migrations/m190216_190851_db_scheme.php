<?php

use yii\db\Expression;
use yii\db\Migration;

/**
 * Class m190216_190851_db_scheme
 */
class m190216_190851_db_scheme extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user` (
              `user_id` INT NOT NULL AUTO_INCREMENT,
              `dt_created` DATETIME NOT NULL,
              `dt_updated` DATETIME NULL,
              `user_created` INT(11) NOT NULL,
              `user_updated` INT(11) NULL,
              `first_name` VARCHAR(255) NOT NULL,
              `last_name` VARCHAR(255) NOT NULL,
              `email` VARCHAR(255) NOT NULL,
              PRIMARY KEY (`user_id`),
              UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC))
            ENGINE = InnoDB;
        ");

        $this->addColumn('user', 'password', 'VARCHAR(255) NOT NULL');
        $this->addColumn('user', 'password_reset_token', 'VARCHAR(255)');
        $this->addColumn('user', 'access_token', 'VARCHAR(255) NOT NULL');
        $this->addColumn('user', 'auth_key', 'VARCHAR(255) NOT NULL');
        $this->addColumn('user', 'username', 'VARCHAR(255) NOT NULL');
        $this->insert('{{user}}', [
            'dt_created' => new Expression('NOW()'),
            'dt_updated' => new Expression('NOW()'),
            'username' => 'admin',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('admin'),
            'user_created' => 1,
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'email@admin.de',
            'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
            'access_token' => Yii::$app->getSecurity()->generateRandomString()
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }


}
