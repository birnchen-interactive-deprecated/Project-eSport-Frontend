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
        //gender
        $this->execute("
            CREATE TABLE IF NOT EXISTS `gender` (
              `gender_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              PRIMARY KEY (`gender_id`))
            ENGINE = InnoDB;");

        //language
        $this->execute("
            CREATE TABLE IF NOT EXISTS `language` (
              `language_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `locale` VARCHAR(45) NULL,
              PRIMARY KEY (`language_id`))
            ENGINE = InnoDB;");

        //nationality
        $this->execute("
            CREATE TABLE IF NOT EXISTS `nationality` (
              `nationality_id` INT NOT NULL,
              `name` VARCHAR(255) NULL,
              PRIMARY KEY (`nationality_id`))
            ENGINE = InnoDB");

        //user
        $this->execute("
             CREATE TABLE IF NOT EXISTS `user` (
              `user_id` INT NOT NULL AUTO_INCREMENT,
              `username` VARCHAR(255) NOT NULL,
              `password` VARCHAR(255) NOT NULL,
              `birthday` DATE NOT NULL,
              `gender_id` INT NULL,
              `nationality_id` INT NULL,
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
              INDEX `FK_user_nationality_id_idx` (`nationality_id` ASC),
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
            CONSTRAINT `FK_user_nationality_id`
                FOREIGN KEY (`nationality_id`)
                REFERENCES `nationality` (`nationality_id`)
                ON DELETE CASCADE
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

        /* Base Nationality */
        $this->insert('nationality',  [
            'nationality_id' => '1',
            'name' => 'Deutschland'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '2',
            'name' => 'Österreich'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '3',
            'name' => 'Schweiz'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '4',
            'name' => 'Frankreich'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '5',
            'name' => 'Gross Britannien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '6',
            'name' => 'Irland'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '7',
            'name' => 'Belgien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '8',
            'name' => 'Italien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '9',
            'name' => 'Spanien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '10',
            'name' => 'Portugal'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '11',
            'name' => 'Island'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '12',
            'name' => 'Norwegen'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '13',
            'name' => 'Schweden'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '14',
            'name' => 'Finnland'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '15',
            'name' => 'Däemark'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '16',
            'name' => 'Estland'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '17',
            'name' => 'Lettland'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '18',
            'name' => 'Litauen'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '19',
            'name' => 'Polen'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '20',
            'name' => 'Belarus'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '21',
            'name' => 'Niederlande'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '22',
            'name' => 'Ukraine'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '23',
            'name' => 'Tschechische Republik'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '24',
            'name' => 'Slowakische Republik'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '25',
            'name' => 'Ungarn'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '26',
            'name' => 'Rumänien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '27',
            'name' => 'Bulgarien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '28',
            'name' => 'Kroatien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '29',
            'name' => 'Bosnien und Herzegowina'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '30',
            'name' => 'Serbien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '31',
            'name' => 'Albanien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '32',
            'name' => 'Griechenland'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '33',
            'name' => 'Moldau'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '34',
            'name' => 'Georgien'
        ]);

        $this->insert('nationality',  [
            'nationality_id' => '35',
            'name' => 'Monaco'
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
