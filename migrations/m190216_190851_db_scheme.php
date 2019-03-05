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
            CREATE TABLE IF NOT EXISTS `gender` (
              `gender_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              PRIMARY KEY (`gender_id`))
            ENGINE = InnoDB;");
            
        $this->execute("
            CREATE TABLE IF NOT EXISTS `language` (
              `language_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `locale` VARCHAR(45) NULL,
              PRIMARY KEY (`language_id`))
            ENGINE = InnoDB;");

        $this->execute("
             CREATE TABLE IF NOT EXISTS `user` (
              `user_id` INT NOT NULL AUTO_INCREMENT,
              `username` VARCHAR(255) NOT NULL,
              `password` VARCHAR(255) NOT NULL,
              `birthday` DATE NOT NULL,
              `gender_id` INT NULL,
              `dt_created` DATETIME NOT NULL,
              `dt_updated` DATETIME NULL,
              `language_id` INT NULL,
              `pre_name` VARCHAR(255) NULL,
              `last_name` VARCHAR(255) NULL,
              `zip_code` VARCHAR(255) NULL,
              `city` VARCHAR(255) NULL,
              `street` VARCHAR(255) NULL,
              `email` VARCHAR(255) NULL,
              PRIMARY KEY (`user_id`),
              UNIQUE INDEX `username_UNIQUE` (`username` ASC),
              INDEX `FK_user_gender_id_idx` (`gender_id` ASC),
              INDEX `FK_user_language_id_idx` (`language_id` ASC),
              CONSTRAINT `FK_user_gender_id`
                FOREIGN KEY (`gender_id`)
                REFERENCES `gender` (`gender_id`)
                ON DELETE SET NULL
                ON UPDATE CASCADE,
              CONSTRAINT `FK_user_language_id`
                FOREIGN KEY (`language_id`)
                REFERENCES `language` (`language_id`)
                ON DELETE SET NULL
                ON UPDATE CASCADE)
            ENGINE = InnoDB;");

        /* Base languages English and German as standard German */
        $this->insert('language',  [
            'language_id' => '1',
            'name' => 'Deutsch',
            'locale' => 'de-DE'
        ]);

        $this->insert('language',  [
            'language_id' => '2',
            'name' => 'Englisch',
            'locale' => 'en-EN'
        ]);

        /* Gender base German */
        $this->insert('gender',  [
            'gender_id' => '1',
            'name' => 'Männlich'
        ]);

        $this->insert('gender',  [
            'gender_id' => '2',
            'name' => 'Weiblich'
        ]);

        $this->insert('gender',  [
            'gender_id' => '3',
            'name' => 'Divers'
        ]);

        /* Creating Admin Users */
        $this->insert('user', [
            'language_id' => '1',
            'gender_id' => '3',
            'dt_created' => new Expression('NOW()'),
            'dt_updated' => new Expression('NOW()'),
            'username' => 'admin',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('admin'),
            'email' => 'admin@admin.de'
            //AdminPW123!.
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
        $this->dropTable('language');
        $this->dropTable('gender');
    }
}
