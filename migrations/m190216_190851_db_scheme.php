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
              `username` VARCHAR(45) NOT NULL,
              `password` VARCHAR(255) NOT NULL,
              `birthday` DATE NOT NULL,
              `gender_id` INT NULL,
              `dt_created` DATETIME NOT NULL,
              `dt_updated` DATETIME NULL,
              `language_id` INT NULL,
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
            CREATE TABLE IF NOT EXISTS `user_data` (
              `user_id` INT NOT NULL,
              `pre_name` VARCHAR(45) NULL,
              `last_name` VARCHAR(45) NULL,
              `zip_code` VARCHAR(45) NULL,
              `city` VARCHAR(45) NULL,
              `street` VARCHAR(45) NULL,
              UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC),
              CONSTRAINT `FK_user_data_user_id`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
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

        $this->execute("
            CREATE TABLE IF NOT EXISTS `mail_newsletter` (
              `user_id` INT NOT NULL,
              `email` VARCHAR(45) NOT NULL,
              `newsletter` TINYINT(1) NULL,
              PRIMARY KEY (`user_id`),
              UNIQUE INDEX `email_UNIQUE` (`email` ASC),
              CONSTRAINT `FK_mail_newsletter_user_id`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB;
        ");

        $this->insert('user', [
            'dt_created' => new Expression('NOW()'),
            'dt_updated' => new Expression('NOW()'),
            'username' => 'admin',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('admin')
            //AdminPW123!.
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
        $this->dropTable('user_data');
        $this->dropTable('user');
        $this->dropTable('language');
        $this->dropTable('gender');
    }
}
