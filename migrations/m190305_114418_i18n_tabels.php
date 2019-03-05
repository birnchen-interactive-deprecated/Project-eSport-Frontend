<?php

use yii\db\Migration;

/**
 * Class m190305_114418_i18n_tabels
 */
class m190305_114418_i18n_tabels extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Gender i18N Tabel
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

        //Labguage i18n Tabel
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

        //Games i18n Tabel
        $this->execute("
            CREATE TABLE IF NOT EXISTS `games_i18n` (
              `games_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(255) NULL,
              PRIMARY KEY (`games_id`, `language_id`),
              CONSTRAINT `games_i18n_id`
                FOREIGN KEY (`games_id`)
                REFERENCES `games` (`games_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //Bracket Mode i18n Tabel
        $this->execute("
            CREATE TABLE IF NOT EXISTS `bracket_mode_i18n` (
              `bracket_mode_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(45) NULL,
              PRIMARY KEY (`bracket_mode_id`, `language_id`),
              CONSTRAINT `FK_bracket_mode_i18n_id`
                FOREIGN KEY (`bracket_mode_id`)
                REFERENCES `bracket_mode` (`bracket_mode_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //tournament_mode_i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_mode_i18n` (
              `mode_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(255) NULL,
              PRIMARY KEY (`mode_id`, `language_id`),
              CONSTRAINT `FK_tournament_mode_i18n_id`
                FOREIGN KEY (`mode_id`)
                REFERENCES `tournament_mode` (`mode_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //Tournament Subrules i18n Tabel
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_subrules_i18n` (
              `subrule_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(255) NULL,
              PRIMARY KEY (`subrule_id`, `language_id`),
              CONSTRAINT `FK_tournament_subrules_i18n_id`
                FOREIGN KEY (`subrule_id`)
                REFERENCES `tournament_subrules` (`subrule_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

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

        /* Games i18n base German */
        $this->insert('games_i18n',  [
            'games_id' => '1',
            'language_id' => '2',
            'name' => 'Rocket League',
            'description' => 'Rocket League from Psyonix'
        ]);

        /* Bracket Mode i18n */
        $this->insert('bracket_mode_i18n',  [
            'bracket_mode_id' => '1',
            'language_id' => '2',
            'name' => 'Single Elimination',
            'description' => 'Normal Single Elimination'
        ]);

        $this->insert('bracket_mode_i18n',  [
            'bracket_mode_id' => '2',
            'language_id' => '2',
            'name' => 'Double Elimination',
            'description' => 'Winner and Looser Bracket'
        ]);

        /* Tournament Mode i18n */
        $this->insert('tournament_mode_i18n',  [
            'mode_id' => '1',
            'language_id' => '2',
            'name' => '1v1',
            'description' => '1v1 Player versus Player'
        ]);

        $this->insert('tournament_mode_i18n',  [
            'mode_id' => '2',
            'language_id' => '2',
            'name' => '2v2',
            'description' => '2v2 Team versus Team'
        ]);

        $this->insert('tournament_mode_i18n',  [
            'mode_id' => '3',
            'language_id' => '2',
            'name' => '3v3',
            'description' => '3v3 Team versus Team'
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tournament_subrules_i18n');
        $this->dropTable('tournament_mode_i18n');
        $this->dropTable('bracket_mode_i18n');
        $this->dropTable('games_i18n');
        $this->dropTable('language_i18n');
        $this->dropTable('gender_i18n');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190305_114418_i18n_tabels cannot be reverted.\n";

        return false;
    }
    */
}
