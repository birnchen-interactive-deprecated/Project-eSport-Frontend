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
        //games
        $this->execute("
            CREATE TABLE IF NOT EXISTS `games` (
              `games_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(255) NULL,
              PRIMARY KEY (`games_id`))
            ENGINE = InnoDB");

        //games i18n
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

        //user_games
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user_games` (
              `user_id` INT NOT NULL,
              `games_id` INT NOT NULL,
              PRIMARY KEY (`user_id`, `games_id`),
              INDEX `FK_user_games_games_id_idx` (`games_id` ASC) VISIBLE,
              CONSTRAINT `FK_user_games_user_id`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_user_games_games_id`
                FOREIGN KEY (`games_id`)
                REFERENCES `games` (`games_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //tournament_mode
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_mode` (
              `mode_id` INT NOT NULL,
              `game_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(255) NULL,
              PRIMARY KEY (`mode_id`, `game_id`),
              INDEX `FK_tournament_mode_game_id_idx` (`game_id` ASC) VISIBLE,
              CONSTRAINT `FK_tournament_mode_game_id`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`games_id`)
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

        //bracketmode
        $this->execute("
            CREATE TABLE IF NOT EXISTS `bracket_mode` (
              `bracket_mode_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(45) NULL,
              PRIMARY KEY (`bracket_mode_id`))
            ENGINE = InnoDB");

        //bracket_mode_i18n
        $this->execute("
            CREATE TABLE IF NOT EXISTS `bracket_mode_i18n` (
              `bracket_mode_id` INT NOT NULL,
              `language_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(45) NULL,
              PRIMARY KEY (`bracket_mode_id`, `language_id`),
              CONSTRAINT `FK_bracket_mode_i18n_id`
                FOREIGN KEY (`bracket_mode_id`)
                REFERENCES //`bracket_mode` (`bracket_mode_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //tournament_rules

        //tournament_subrules

        //tournament_subrules_i18n

        //tournaments
        //$this->execute("
        //    CREATE TABLE IF NOT EXISTS `tournaments` (
        //      `tournament_id` INT NOT NULL,
        //      `game_id` INT NOT NULL,
        //      `mode_id` INT NOT NULL,
        //      `rules_id` INT NOT NULL,
        //      `bracket_id` INT NOT NULL,
        //      `tournament_name` VARCHAR(255) NOT NULL,
        //      `tournament_description` VARCHAR(255) NULL,
        //      `dt_starting_time` DATETIME NOT NULL,
        //      `dt_checkin_begin` DATETIME NOT NULL,
        //      `dt_checkin_ends` DATETIME NOT NULL,
        //      `has_password` TINYINT(1) NOT NULL DEFAULT 0,
        //      `password` VARCHAR(255) NULL,
        //      PRIMARY KEY (`tournament_id`),
        //      INDEX `rl_tournaments_mmode_id_idx` (`mode_id` ASC) VISIBLE,
        //      INDEX `rl_tournnament_rules_id_idx` (`rules_id` ASC) VISIBLE,
        //      INDEX `FK_rl_tournament_game_id_idx` (`game_id` ASC) VISIBLE,
        //      INDEX `FK_tournaments_bracket_id_idx` (`bracket_id` ASC) VISIBLE,
        //      CONSTRAINT `FK_tournaments_mode_id`
        //        FOREIGN KEY (`mode_id`)
        //        REFERENCES `tournament_mode` (`mode_id`)
        //        ON DELETE CASCADE
        //        ON UPDATE CASCADE,
        //      CONSTRAINT `FK_tournaments_rules_id`
        //        FOREIGN KEY (`rules_id`)
        //        REFERENCES `tournament_rules` (`rules_id`)
        //        ON DELETE CASCADE
        //        ON UPDATE CASCADE,
        //      CONSTRAINT `FK_tournament_game_id`
        //        FOREIGN KEY (`game_id`)
        //        REFERENCES `games` (`games_id`)
        //        ON DELETE CASCADE
        //        ON UPDATE CASCADE,
        //      CONSTRAINT `FK_tournaments_bracket_id`
        //        FOREIGN KEY (`bracket_id`)
        //        REFERENCES `bracket_mode` (`bracket_mode_id`)
        //        ON DELETE CASCADE
        //        ON UPDATE CASCADE)
        //    ENGINE = InnoDB");


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bracket_mode_i18n');
        $this->dropTable('bracket_mode');
        $this->dropTable('tournament_mode_i18n');
        $this->dropTable('tournament_mode');
        $this->dropTable('user_games');
        $this->dropTable('games_i18n');
        $this->dropTable('games');

        //echo "m190228_074605_tournaments cannot be reverted.\n";

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
