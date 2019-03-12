<?php

use yii\db\Migration;

/**
 * Class m190306_075047_base_sub_teams
 */
class m190306_075047_base_sub_teams extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /** Team REC **/
        /* 2v2 Sub Team REC */
        $this->insert('sub_team',  [
            'sub_team_id' => '1',
            'main_team_id' => '1',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '22',
            'headquarter_id' => '1',
            'name' => 'Robotic Elite Clan',
            'short_code' => 'REC',
            'description' => 'Double Action',
            'disqualified' => 0,
        ]);

        /* 3v3 Sub Team REC */
        $this->insert('sub_team',  [
            'sub_team_id' => '2',
            'main_team_id' => '1',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '22',
            'headquarter_id' => '1',
            'name' => 'Robotic Elite Clan',
            'short_code' => 'REC',
            'description' => 'Tripple Action',
            'disqualified' => 0,
        ]);

        /** Team CaptainViper **/
        /* 2v2 Sub Team CaptainViper */
        $this->insert('sub_team',  [
            'sub_team_id' => '3',
            'main_team_id' => '2',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '4',
            'headquarter_id' => '2',
            'name' => 'Captain Viper',
            'short_code' => 'CV',
            'description' => 'Das 2v2 Team',
            'disqualified' => 0,
        ]);

        /* 2v2 Sub Team CaptainViper - Different Bünzlis */
        $this->insert('sub_team',  [
            'sub_team_id' => '15',
            'main_team_id' => '2',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '4',
            'headquarter_id' => '2',
            'name' => 'Different Bünzlis',
            'short_code' => 'CV',
            'description' => 'Das 2v2 Team',
            'disqualified' => 0,
        ]);

        /* 3v3 Sub Team CaptainViper */
        $this->insert('sub_team',  [
            'sub_team_id' => '4',
            'main_team_id' => '2',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '4',
            'headquarter_id' => '2',
            'name' => 'Captain Viper',
            'short_code' => 'CV',
            'description' => 'Das 3v3 Team',
            'disqualified' => 0,
        ]);

        /** Team Timeout Gaming **/
        /* 2v2 Sub Team Timeout Gaming */
        $this->insert('sub_team',  [
            'sub_team_id' => '10',
            'main_team_id' => '3',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '53',
            'headquarter_id' => '1',
            'name' => 'Timeout Gaming',
            'short_code' => 'TG',
            'description' => 'Das 2v2 Team',
        ]);

        /* 3v3 Sub Team Timeout Gaming */
        $this->insert('sub_team',  [
            'sub_team_id' => '5',
            'main_team_id' => '3',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '14',
            'headquarter_id' => '1',
            'name' => 'Timeout Gaming',
            'short_code' => 'TG',
            'description' => 'timeout is coming',
            'disqualified' => 0,
        ]);

        /* 3v3 Sub Team Timeout Gaming */
        $this->insert('sub_team',  [
            'sub_team_id' => '6',
            'main_team_id' => '3',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '15',
            'headquarter_id' => '1',
            'name' => 'Timeout',
            'short_code' => 'TG',
            'description' => 'timeout is coming',
            'disqualified' => 0,
        ]);

        /** Team Stealth7 eSports **/
        /* 3v3 Sub Team Stealth7 eSports */
        $this->insert('sub_team',  [
            'sub_team_id' => '7',
            'main_team_id' => '4',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '38',
            'headquarter_id' => '1',
            'name' => 'Stealth7 eSports',
            'short_code' => 'S7',
            'description' => 'invisible Masters',
            'disqualified' => 0,
        ]);

        /* 3v3 Sub Team Stealth7 eSports - Hoch und Weit */
        $this->insert('sub_team',  [
            'sub_team_id' => '8',
            'main_team_id' => '4',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '65',
            'headquarter_id' => '1',
            'name' => 'Hoch und Weit',
            'short_code' => 'S7',
            'description' => 'invisible Masters',
            'disqualified' => 0,
        ]);

        /* 2v2 Sub Team Stealth7 eSports */
        $this->insert('sub_team',  [
            'sub_team_id' => '9',
            'main_team_id' => '4',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '37',
            'headquarter_id' => '1',
            'name' => 'Stealth7 eSports',
            'short_code' => 'S7',
            'description' => 'Das 2v2 Team',
            'disqualified' => 0,
        ]);

        /** Team AcTive **/
        /* 2v2 Sub Team AcTive */
        $this->insert('sub_team',  [
            'sub_team_id' => '11',
            'main_team_id' => '5',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '33',
            'headquarter_id' => '1',
            'name' => 'AcTive',
            'short_code' => '',
            'description' => '',
            'disqualified' => 0,
        ]);

        /* 3v3 Sub Team AcTive */
        $this->insert('sub_team',  [
            'sub_team_id' => '12',
            'main_team_id' => '5',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '33',
            'headquarter_id' => '1',
            'name' => 'AcTive',
            'short_code' => '',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** Team Acpect **/
        /* 2v2 Sub Team Acpect */
        $this->insert('sub_team',  [
            'sub_team_id' => '13',
            'main_team_id' => '6',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '19',
            'headquarter_id' => '1',
            'name' => 'Team Acpect',
            'short_code' => '',
            'description' => '',
            'disqualified' => 0,
        ]);

        /* 3v3 Sub Team Acpect */
        $this->insert('sub_team',  [
            'sub_team_id' => '14',
            'main_team_id' => '6',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '19',
            'headquarter_id' => '1',
            'name' => 'Team Acpect',
            'short_code' => '',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** Team Thinking **/
        /* 2v2 Sub Team Thinking */
        $this->insert('sub_team',  [
            'sub_team_id' => '16',
            'main_team_id' => '8',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '9',
            'headquarter_id' => '1',
            'name' => 'Thinking',
            'short_code' => '',
            'description' => '',
            'disqualified' => 0,
        ]);

        /* 3v3 Sub Team Thinking */
        $this->insert('sub_team',  [
            'sub_team_id' => '17',
            'main_team_id' => '8',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '9',
            'headquarter_id' => '1',
            'name' => 'Thinking',
            'short_code' => '',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** Team Panicflip by Orbital Gaming **/
        /* 2v2 Sub Team Panicflip */
        $this->insert('sub_team',  [
            'sub_team_id' => '18',
            'main_team_id' => '13',
            'game_id' => '1',
            'tournament_mode_id' => '2',
            'team_captain_id' => '42',
            'headquarter_id' => '1',
            'name' => 'Panicflip',
            'short_code' => '',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** Team eQuality. **/
        /* 3v3 Sub Team eQuality. */
        $this->insert('sub_team',  [
            'sub_team_id' => '19',
            'main_team_id' => '7',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '44',
            'headquarter_id' => '1',
            'name' => 'eQuality.',
            'short_code' => '',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** Team eSport Rhein-Neckar **/
        /* 3v3 Sub Team eSport Rhein-Neckar */
        $this->insert('sub_team',  [
            'sub_team_id' => '20',
            'main_team_id' => '9',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '17',
            'headquarter_id' => '1',
            'name' => 'eSport Rhein-Neckar',
            'short_code' => 'ERN',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** GHR E-Sports - Team Agency **/
        /* 3v3 Sub Team Agency */
        $this->insert('sub_team',  [
            'sub_team_id' => '21',
            'main_team_id' => '10',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '58',
            'headquarter_id' => '1',
            'name' => 'Team Agency',
            'short_code' => 'GHR',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** Team The Dark Start **/
        /* 3v3 Sub Team The Dark Start */
        $this->insert('sub_team',  [
            'sub_team_id' => '22',
            'main_team_id' => '11',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '41',
            'headquarter_id' => '1',
            'name' => 'The Dark Start',
            'short_code' => 'TGS',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** Team Esport BERG **/
        /* 3v3 Sub Team Esport BERG */
        $this->insert('sub_team',  [
            'sub_team_id' => '23',
            'main_team_id' => '12',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '56',
            'headquarter_id' => '1',
            'name' => 'Esport BERG',
            'short_code' => 'BERG',
            'description' => '',
            'disqualified' => 0,
        ]);

        /** Team Safari Force **/
        /* 3v3 Sub Team Safari Force */
        $this->insert('sub_team',  [
            'sub_team_id' => '24',
            'main_team_id' => '15',
            'game_id' => '1',
            'tournament_mode_id' => '3',
            'team_captain_id' => '71',
            'headquarter_id' => '1',
            'name' => 'Safari Force',
            'short_code' => 'SF',
            'description' => '',
            'disqualified' => 0,
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190306_075047_base_sub_teams cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190306_075047_base_sub_teams cannot be reverted.\n";

        return false;
    }
    */
}
