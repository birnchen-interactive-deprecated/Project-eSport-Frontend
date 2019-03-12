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

        /* REC 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '1',
            'user_id' => '22',
            'is_sub' => 0,
        ]);

        /* REC 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '1',
            'user_id' => '2',
            'is_sub' => 0,
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

        /* REC 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '2',
            'user_id' => '22',
            'is_sub' => 0,
        ]);

        /* REC 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '2',
            'user_id' => '2',
            'is_sub' => 0,
        ]);

        /* REC main Team member */
        $this->insert('team_member',  [
            'team_id' => '1',
            'user_id' => '2',
        ]);

        /* REC main Team member */
        $this->insert('team_member',  [
            'team_id' => '1',
            'user_id' => '69',
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

        /* CaptainViper 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '3',
            'user_id' => '4',
            'is_sub' => 0,
        ]);

        /* CaptainViper 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '3',
            'user_id' => '6',
            'is_sub' => 0,
        ]);

        /* CaptainViper 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '3',
            'user_id' => '13',
            'is_sub' => 1,
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

        /* CaptainViper 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '4',
            'user_id' => '4',
            'is_sub' => 0,
        ]);

        /* CaptainViper 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '4',
            'user_id' => '6',
            'is_sub' => 0,
        ]);

        /* CaptainViper 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '4',
            'user_id' => '13',
            'is_sub' => 0,
        ]);

        /* CaptainViper 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '4',
            'user_id' => '11',
            'is_sub' => 1,
        ]);

        /* CaptainViper 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '4',
            'user_id' => '12',
            'is_sub' => 1,
        ]);

        /* CaptainViper main Team member */
        $this->insert('team_member',  [
            'team_id' => '2',
            'user_id' => '6',
        ]);

        /* CaptainViper main Team member */
        $this->insert('team_member',  [
            'team_id' => '2',
            'user_id' => '13',
        ]);

        /* CaptainViper main Team member */
        $this->insert('team_member',  [
            'team_id' => '2',
            'user_id' => '11',
        ]);

        /* CaptainViper main Team member */
        $this->insert('team_member',  [
            'team_id' => '2',
            'user_id' => '12',
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

        /* CTimeout Gaming 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '10',
            'user_id' => '53',
            'is_sub' => 0,
        ]);

        /* CTimeout Gaming 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '10',
            'user_id' => '30',
            'is_sub' => 0,
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

        /* Timeout Gaming 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '5',
            'user_id' => '14',
            'is_sub' => 0,
        ]);

        /* Timeout Gaming 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '5',
            'user_id' => '53',
            'is_sub' => 0,
        ]);

        /* Timeout Gaming 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '5',
            'user_id' => '57',
            'is_sub' => 0,
        ]);

        /* Timeout Gaming 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '5',
            'user_id' => '30',
            'is_sub' => 1,
        ]);

        /* Timeout Gaming 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '5',
            'user_id' => '67',
            'is_sub' => 1,
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

        /* Timeout 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '6',
            'user_id' => '15',
            'is_sub' => 0,
        ]);

        /* Timeout 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '6',
            'user_id' => '16',
            'is_sub' => 0,
        ]);

        /* Timeout 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '6',
            'user_id' => '39',
            'is_sub' => 0,
        ]);

        /* Timeout 3v3 Team Member TiMoTay*/
        //$this->insert('sub_team_member',  [
        //    'sub_team_id' => '6',
        //    'user_id' => '16',
        //    'is_sub' => 1,
        //]);

        /* Timeout 3v3 Team Member Yuko*/
        //$this->insert('sub_team_member',  [
        //    'sub_team_id' => '6',
        //    'user_id' => '16',
        //    'is_sub' => 1,
        //]);

        /* Timeout Gaming main Team member */
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '53',
        ]);

        /* Timeout Gaming main Team member */
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '57',
        ]);

        /* Timeout Gaming main Team member */
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '30',
        ]);

        /* Timeout Gaming main Team member */
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '67',
        ]);

        /* Timeout Gaming main Team member */
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '15',
        ]);

        /* Timeout Gaming main Team member */
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '16',
        ]);

        /* Timeout Gaming main Team member */
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '39',
        ]);

        /* Timeout Gaming main Team member TiMoTay*/
        //$this->insert('team_member',  [
        //    'team_id' => '3',
        //    'user_id' => '15',
        //]);

        /* Timeout Gaming main Team member Yuko*/
        //$this->insert('team_member',  [
        //    'team_id' => '3',
        //    'user_id' => '15',
        //]);

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

        /* Stealth7 eSports 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '7',
            'user_id' => '38',
            'is_sub' => 0,
        ]);

        /* Stealth7 eSports 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '7',
            'user_id' => '35',
            'is_sub' => 0,
        ]);

        /* Stealth7 eSports 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '7',
            'user_id' => '37',
            'is_sub' => 0,
        ]);

        /* Stealth7 eSports 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '7',
            'user_id' => '36',
            'is_sub' => 1,
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

        /* Stealth7 eSports 3v3 Team Member - Hoch und Weit */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '8',
            'user_id' => '65',
            'is_sub' => 0,
        ]);

        /* Stealth7 eSports 3v3 Team Member - Hoch und Weit */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '8',
            'user_id' => '77',
            'is_sub' => 0,
        ]);

        /* Stealth7 eSports 3v3 Team Member - Hoch und Weit */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '8',
            'user_id' => '25',
            'is_sub' => 0,
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

        /* Stealth7 eSports 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '9',
            'user_id' => '37',
            'is_sub' => 0,
        ]);

        /* Stealth7 eSports 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '9',
            'user_id' => '35',
            'is_sub' => 0,
        ]);

        /* Stealth7 eSports 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '9',
            'user_id' => '38',
            'is_sub' => 1,
        ]);

        /* Stealth7 eSports main Team member */
        $this->insert('team_member',  [
            'team_id' => '4',
            'user_id' => '38',
        ]);

        /* Stealth7 eSports main Team member */
        $this->insert('team_member',  [
            'team_id' => '4',
            'user_id' => '35',
        ]);

        /* Stealth7 eSports main Team member */
        $this->insert('team_member',  [
            'team_id' => '4',
            'user_id' => '37',
        ]);

        /* Stealth7 eSports main Team member */
        $this->insert('team_member',  [
            'team_id' => '4',
            'user_id' => '36',
        ]);

        /* Stealth7 eSports main Team member */
        $this->insert('team_member',  [
            'team_id' => '4',
            'user_id' => '65',
        ]);

        /* Stealth7 eSports main Team member */
        $this->insert('team_member',  [
            'team_id' => '4',
            'user_id' => '77',
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

        /* AcTive 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '9',
            'user_id' => '33',
            'is_sub' => 0,
        ]);

        /* AcTive 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '9',
            'user_id' => '49',
            'is_sub' => 0,
        ]);

        /* AcTive 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '9',
            'user_id' => '10',
            'is_sub' => 1,
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

        /* AcTive 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '8',
            'user_id' => '33',
            'is_sub' => 0,
        ]);

        /* AcTive 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '8',
            'user_id' => '49',
            'is_sub' => 0,
        ]);

        /* AcTive 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '8',
            'user_id' => '10',
            'is_sub' => 0,
        ]);

        /* AcTive 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '8',
            'user_id' => '32',
            'is_sub' => 1,
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
