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
              INDEX `FK_user_games_games_id_idx` (`games_id` ASC),
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
              INDEX `FK_tournament_mode_game_id_idx` (`game_id` ASC),
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

        //bracket_mode_i18n////
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
//
        //tournament_rules
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_rules` (
              `rules_id` INT NOT NULL,
              `game_id` INT NULL,
              `name` VARCHAR(45) NULL,
              PRIMARY KEY (`rules_id`),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC),
              INDEX `FK_tournament_rules_game_id_idx` (`game_id` ASC),
              CONSTRAINT `FK_tournament_rules_game_id`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`games_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //tournament_subrules
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_subrules` (
              `rules_id` INT NOT NULL,
              `subrule_id` INT NOT NULL,
              `name` VARCHAR(45) NULL,
              `description` VARCHAR(255) NULL,
              PRIMARY KEY (`rules_id`, `subrule_id`),
              CONSTRAINT `FK_tournament_subrules_id`
                FOREIGN KEY (`rules_id`)
                REFERENCES `tournament_rules` (`rules_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //tournament_subrules_i18n
        //$this->execute("
        //    CREATE TABLE IF NOT EXISTS `tournament_subrules_i18n` (
        //      `subrule_id` INT NOT NULL,
        //      `language_id` VARCHAR(45) NOT NULL,
        //      `name` VARCHAR(45) NULL,
        //      `description` VARCHAR(255) NULL,
        //      PRIMARY KEY (`subrule_id`, `language_id`),
        //      CONSTRAINT `FK_tournament_subrules_i18n_subrule_id`
        //        FOREIGN KEY (`subrule_id`)
        //        REFERENCES `tournament_subrules` (`subrule_id`)
        //        ON DELETE CASCADE
        //        ON UPDATE CASCADE)
        //    ENGINE = InnoDB");

        //tournaments
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournaments` (
              `tournament_id` INT NOT NULL,
              `game_id` INT NOT NULL,
              `mode_id` INT NOT NULL,
              `rules_id` INT NOT NULL,
              `bracket_id` INT NOT NULL,
              `tournament_name` VARCHAR(255) NOT NULL,
              `tournament_description` VARCHAR(255) NULL,
              `dt_starting_time` DATETIME NOT NULL,
              `dt_checkin_begin` DATETIME NOT NULL,
              `dt_checkin_ends` DATETIME NOT NULL,
              `has_password` TINYINT(1) NOT NULL DEFAULT 0,
              `password` VARCHAR(255) NULL,
              PRIMARY KEY (`tournament_id`),
              INDEX `rl_tournaments_mmode_id_idx` (`mode_id` ASC),
              INDEX `rl_tournnament_rules_id_idx` (`rules_id` ASC),
              INDEX `FK_rl_tournament_game_id_idx` (`game_id` ASC),
              INDEX `FK_tournaments_bracket_id_idx` (`bracket_id` ASC),
              CONSTRAINT `FK_tournaments_mode_id`
                FOREIGN KEY (`mode_id`)
                REFERENCES `tournament_mode` (`mode_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournaments_rules_id`
                FOREIGN KEY (`rules_id`)
                REFERENCES `tournament_rules` (`rules_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournament_game_id`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`games_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournaments_bracket_id`
                FOREIGN KEY (`bracket_id`)
                REFERENCES `bracket_mode` (`bracket_mode_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //main_team
        $this->execute("
            CREATE TABLE IF NOT EXISTS `main_team` (
              `team_id` INT NOT NULL,
              `owner_id` INT NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NULL,
              PRIMARY KEY (`team_id`),
              INDEX `FK_main_team_owner_id_idx` (`owner_id` ASC),
              CONSTRAINT `FK_main_team_owner_id`
                FOREIGN KEY (`owner_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //team_member
        $this->execute("
            CREATE TABLE IF NOT EXISTS `team_member` (
              `team_id` INT NOT NULL,
              `user_id` INT NOT NULL,
              PRIMARY KEY (`team_id`, `user_id`),
              INDEX `FK_team_member_user_id_idx` (`user_id` ASC),
              CONSTRAINT `FK_team_member_team_id`
                FOREIGN KEY (`team_id`)
                REFERENCES `main_team` (`team_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_team_member_user_id`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //sub_team
        $this->execute("
            CREATE TABLE IF NOT EXISTS `sub_team` (
              `sub_team_id` INT NOT NULL,
              `main_team_id` INT NOT NULL,
              `game_id` INT NOT NULL,
              `tournament_mode_id` INT NOT NULL,
              `team_captain_id` INT NOT NULL,
              `name` VARCHAR(255) NULL,
              `description` VARCHAR(255) NULL,
              PRIMARY KEY (`sub_team_id`, `main_team_id`, `game_id`, `tournament_mode_id`),
              INDEX `FK_sub_team_main_team_id_idx` (`main_team_id` ASC),
              INDEX `FK_sub_team_game_id_idx` (`game_id` ASC),
              INDEX `FK_sub_team_tournament_mode_id_idx` (`tournament_mode_id` ASC),
              INDEX `FK_sub_team_team_captain_is_idx` (`team_captain_id` ASC),
              CONSTRAINT `FK_sub_team_main_team_id`
                FOREIGN KEY (`main_team_id`)
                REFERENCES `main_team` (`team_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_sub_team_game_id`
                FOREIGN KEY (`game_id`)
                REFERENCES `games` (`games_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_sub_team_tournament_mode_id`
                FOREIGN KEY (`tournament_mode_id`)
                REFERENCES `tournament_mode` (`mode_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_sub_team_team_captain_is`
                FOREIGN KEY (`team_captain_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //sub_team_member
        $this->execute("
            CREATE TABLE IF NOT EXISTS `sub_team_member` (
              `sub_team_id` INT NOT NULL,
              `user_id` INT NOT NULL,
              `is_sub` TINYINT NULL,
              PRIMARY KEY (`user_id`),
              INDEX `FK_sub_team_member_user_id_idx` (`user_id` ASC),
              CONSTRAINT `FK_sub_team_member_sub_team_id`
                FOREIGN KEY (`sub_team_id`)
                REFERENCES `sub_team` (`sub_team_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_sub_team_member_user_id`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //player_participating
        $this->execute("
            CREATE TABLE IF NOT EXISTS `player_participating` (
              `tournament_id` INT NOT NULL,
              `user_id` INT NOT NULL,
              `cheked_in` TINYINT NULL,
              `disqualified` TINYINT NULL,
              PRIMARY KEY (`tournament_id`, `user_id`),
              INDEX `FK_player_participating_user_id_idx` (`user_id` ASC),
              CONSTRAINT `FK_player_participating_tournament_id`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournaments` (`tournament_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_player_participating_user_id`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //team_participating
        $this->execute("
            CREATE TABLE IF NOT EXISTS `team_participating` (
              `tournament_id` INT NOT NULL,
              `sub_team_id` INT NOT NULL,
              `checked_in` TINYINT NULL,
              `disqualified` TINYINT NULL,
              INDEX `FK_team_participating_tournament_id_idx` (`tournament_id` ASC),
              INDEX `FK_team_participating_team_id_idx` (`sub_team_id` ASC),
              PRIMARY KEY (`tournament_id`, `sub_team_id`),
              CONSTRAINT `FK_team_participating_tournament_id`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournaments` (`tournament_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_team_participating_team_id`
                FOREIGN KEY (`sub_team_id`)
                REFERENCES `sub_team` (`sub_team_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //tournament_encounter
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_encounter` (
              `encounter_id` INT NOT NULL,
              `tournament_id` INT NOT NULL,
              `winner_looser` TINYINT(1) NULL,
              `matches_to_play` INT NOT NULL,
              `tournament_round` INT NOT NULL,
              `team_1_id` INT NULL,
              `team_2_id` INT NULL,
              `completed` TINYINT NULL,
              PRIMARY KEY (`encounter_id`, `tournament_id`),
              INDEX `FK_tournament_encounte_tournamentr_id_idx` (`tournament_id` ASC),
              INDEX `FK_tournament_encounter_team_1_id_idx` (`team_1_id` ASC),
              INDEX `FK_tournament_encounter_team_2_id_idx` (`team_2_id` ASC),
              CONSTRAINT `FK_tournament_encounte_tournamentr_id`
                FOREIGN KEY (`tournament_id`)
                REFERENCES `tournaments` (`tournament_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournament_encounter_team_1_id`
                FOREIGN KEY (`team_1_id`)
                REFERENCES `team_participating` (`sub_team_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournament_encounter_team_2_id`
                FOREIGN KEY (`team_2_id`)
                REFERENCES `team_participating` (`sub_team_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournament_encounter_team_1_id`
                FOREIGN KEY (`team_1_id`)
                REFERENCES `player_participating` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournament_encounter_team_2_id`
                FOREIGN KEY (`team_2_id`)
                REFERENCES `player_participating` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //tournament_encounter_points
        $this->execute("
            CREATE TABLE IF NOT EXISTS `tournament_encounter_points` (
              `encounter_points_id` INT NOT NULL,
              `encounter_id` INT NOT NULL,
              `game_round` INT NOT NULL,
              `screen_team_1` VARCHAR(255) NULL,
              `screen_team_2` VARCHAR(255) NULL,
              `goals_team_1` INT NULL,
              `goals_team_2` INT NULL,
              `replay_team_1` VARCHAR(255) NULL,
              `replay_team_2` VARCHAR(255) NULL,
              `accepted` TINYINT NULL,
              `winner_team_id` INT NULL,
              PRIMARY KEY (`encounter_points_id`, `encounter_id`, `game_round`),
              INDEX `FK_tournament_encounter_points_encounter_id_idx` (`encounter_id` ASC),
              INDEX `FK_tournament_encounter_points_winner_team_id_idx` (`winner_team_id` ASC),
              CONSTRAINT `FK_tournament_encounter_points_encounter_id`
                FOREIGN KEY (`encounter_id`)
                REFERENCES `tournament_encounter` (`encounter_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournament_encounter_points_winner_team_id`
                FOREIGN KEY (`winner_team_id`)
                REFERENCES `team_participating` (`sub_team_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_tournament_encounter_points_winner_team_id`
                FOREIGN KEY (`winner_team_id`)
                REFERENCES `player_participating` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        //user_stats
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user_stats` (
              `user_id` INT NOT NULL,
              `tournament_encounter_points_id` INT NOT NULL,
              `points` INT NULL,
              `goals` INT NULL,
              `assists` INT NULL,
              `saves` INT NULL,
              `shots` INT NULL,
              PRIMARY KEY (`user_id`, `tournament_encounter_points_id`),
              INDEX `FK_user_stats_tournament_encounter_points_id_idx` (`tournament_encounter_points_id` ASC,
              CONSTRAINT `FK_user_stats_user_id`
                FOREIGN KEY (`user_id`)
                REFERENCES `user` (`user_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
              CONSTRAINT `FK_user_stats_tournament_encounter_points_id`
                FOREIGN KEY (`tournament_encounter_points_id`)
                REFERENCES `tournament_encounter_points` (`encounter_points_id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE)
            ENGINE = InnoDB");

        /* Games base German */
        echo "m190228_074605_tournaments: Adding Rocket League as first Game\n";
        $this->insert('games',  [
            'games_id' => '1',
            'name' => 'Rocket League',
            'description' => 'Rocket League von Psyonix'
        ]);

        /* Games i18n base German */
        echo "m190228_074605_tournaments: Adding Rocket League Translation\n";
        $this->insert('games_i18n',  [
            'games_id' => '1',
            'language_id' => '2',
            'name' => 'Rocket League',
            'description' => 'Rocket League from Psyonix'
        ]);

        /* Tournament Mode Base German */
        echo "m190228_074605_tournaments: Adding Rocket League as first Game\n";
        $this->insert('tournament_mode',  [
            'mode_id' => '1',
            'game_id' => '1',
            'name' => '1v1',
            'description' => '1v1 Spieler gegen Spieler'
        ]);

        $this->insert('tournament_mode',  [
            'mode_id' => '2',
            'game_id' => '1',
            'name' => '2v2',
            'description' => '2v2 Team mit zwei Leuten gegen Team mit zwei Leuten'
        ]);

        $this->insert('tournament_mode',  [
            'mode_id' => '3',
            'game_id' => '1',
            'name' => '3v3',
            'description' => '3v3 Team mit drei Leuten gegen Team mit drei Leuten'
        ]);

        /* Tournament Mode i18n */
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_stats');
        $this->dropTable('tournament_encounter_points');
        $this->dropTable('tournament_encounter');
        $this->dropTable('team_participating');
        $this->dropTable('player_participating');
        $this->dropTable('sub_team_member');
        $this->dropTable('sub_team');
        $this->dropTable('team_member');
        $this->dropTable('main_team');
        $this->dropTable('tournaments');
        //$this->dropTable('tournament_subrules_i18n');
        $this->dropTable('tournament_subrules');
        $this->dropTable('tournament_rules');
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
