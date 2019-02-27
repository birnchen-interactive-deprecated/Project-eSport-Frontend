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
            

        $this->execute("    CREATE TABLE IF NOT EXISTS `language` (
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

        $this->execute("
            CREATE TABLE IF NOT EXISTS `language_i18n` (
              `id` INT NOT NULL,
              `language_id` VARCHAR(45) NOT NULL,
              `name` VARCHAR(45) NULL,
              PRIMARY KEY (`id`, `language_id`),
              CONSTRAINT `FK_language_i18n_language_id`
                FOREIGN KEY (`id`)
                REFERENCES `language` (`language_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB;");


        $this->execute("
            CREATE TABLE IF NOT EXISTS `gender_i18n` (
              `gender_id` INT NOT NULL,
              `language_id` VARCHAR(45) NOT NULL,
              `name` VARCHAR(45) NULL,
              PRIMARY KEY (`gender_id`, `language_id`),
              CONSTRAINT `FK_gender_i18n_gender_id`
                FOREIGN KEY (`gender_id`)
                REFERENCES `gender` (`gender_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB;");

        $this->insert('user', [
            'dt_created' => new Expression('NOW()'),
            'dt_updated' => new Expression('NOW()'),
            'username' => 'admin',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('admin'),
            'email' => 'admin@admin.de'
            //AdminPW123!.
        ]);

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

        /* i18n Translation for Base Languages */
        $this->insert('language_i18n',  [
            'id' => '1',
            'language_id' => '2',
            'name' => 'German'
        ]);

        $this->insert('language_i18n',  [
            'id' => '2',
            'language_id' => '2',
            'name' => 'English'
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

        /* i18n Translation forGender */
        $this->insert('gender_i18n',  [
            'gender_id' => '1',
            'language_id' => '2',
            'name' => 'Male'
        ]);

        $this->insert('gender_i18n',  [
            'gender_id' => '2',
            'language_id' => '2',
            'name' => 'Female'
        ]);

        $this->insert('gender_i18n',  [
            'gender_id' => '3',
            'language_id' => '2',
            'name' => 'Miscellaneous'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('mail_newsletter');
        $this->dropTable('gender_i18n');
        $this->dropTable('language_i18n');
        $this->dropTable('user');
        $this->dropTable('language');
        $this->dropTable('gender');
    }
}
