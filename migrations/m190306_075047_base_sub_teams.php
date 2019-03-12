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

        /* CaptainViper 2v2 Team Member - Different Bünzlis */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '3',
            'user_id' => '11',
            'is_sub' => 0,
        ]);

        /* CaptainViper 2v2 Team Member - Different Bünzlis Stonie, user ID ändern*/
        $this->insert('sub_team_member',  [
            'sub_team_id' => '3',
            'user_id' => '7',
            'is_sub' => 0,
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

        /* CaptainViper main Team member Stonie user id ändern*/
        $this->insert('team_member',  [
            'team_id' => '2',
            'user_id' => '7',
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

        /* Timeout 3v3 Team Member TiMoTay user id ändern*/
        $this->insert('sub_team_member',  [
            'sub_team_id' => '6',
            'user_id' => '16',
            'is_sub' => 1,
        ]);

        /* Timeout 3v3 Team Member Yuko user id ändern*/
        $this->insert('sub_team_member',  [
            'sub_team_id' => '6',
            'user_id' => '16',
            'is_sub' => 1,
        ]);

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

        /* Timeout Gaming main Team member TiMoTay user id ändern*/
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '7',
        ]);

        /* Timeout Gaming main Team member Yuko user id ändern*/
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '7',
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

        /* AcTive main Team member */
        $this->insert('team_member',  [
            'team_id' => '5',
            'user_id' => '33',
        ]);

        /* AcTive main Team member */
        $this->insert('team_member',  [
            'team_id' => '5',
            'user_id' => '49',
        ]);

        /* AcTive main Team member */
        $this->insert('team_member',  [
            'team_id' => '5',
            'user_id' => '32',
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

        /* Team Acpect 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '13',
            'user_id' => '19',
            'is_sub' => 0,
        ]);

        /* Team Acpect 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '13',
            'user_id' => '52',
            'is_sub' => 0,
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

        /* Team Acpect 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '14',
            'user_id' => '19',
            'is_sub' => 0,
        ]);

        /* Team Acpect 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '14',
            'user_id' => '76',
            'is_sub' => 0,
        ]);

        /* Team Acpect 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '14',
            'user_id' => '75',
            'is_sub' => 0,
        ]);

        /* Team Acpect 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '14',
            'user_id' => '52',
            'is_sub' => 1,
        ]);

        /* Team Acpect main Team member */
        $this->insert('team_member',  [
            'team_id' => '6',
            'user_id' => '52',
        ]);

        /* Team Acpect main Team member */
        $this->insert('team_member',  [
            'team_id' => '6',
            'user_id' => '76',
        ]);

        /* Team Acpect main Team member */
        $this->insert('team_member',  [
            'team_id' => '6',
            'user_id' => '75',
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

        /* Team Thinking 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '16',
            'user_id' => '9',
            'is_sub' => 0,
        ]);

        /* Team Thinking 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '16',
            'user_id' => '8',
            'is_sub' => 0,
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

        /* Team Thinking 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '17',
            'user_id' => '9',
            'is_sub' => 0,
        ]);

        /* Team Thinking 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '17',
            'user_id' => '8',
            'is_sub' => 0,
        ]);

        /* Team Thinking 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '17',
            'user_id' => '83',
            'is_sub' => 0,
        ]);

        /* Team Thinking main Team member */
        $this->insert('team_member',  [
            'team_id' => '8',
            'user_id' => '8',
        ]);

        /* Team Thinking main Team member */
        $this->insert('team_member',  [
            'team_id' => '8',
            'user_id' => '83',
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

        /* Team Panicflip 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '18',
            'user_id' => '42',
            'is_sub' => 0,
        ]);

        /* Team Panicflip 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '18',
            'user_id' => '43',
            'is_sub' => 0,
        ]);

        /* Team Panicflip main Team member */
        $this->insert('team_member',  [
            'team_id' => '13',
            'user_id' => '43',
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

        /* Team eQuality. 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '19',
            'user_id' => '44',
            'is_sub' => 0,
        ]);

        /* Team eQuality. 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '19',
            'user_id' => '40',
            'is_sub' => 0,
        ]);

        /* Team eQuality. 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '19',
            'user_id' => '45',
            'is_sub' => 0,
        ]);

        /* Team eQuality. main Team member */
        $this->insert('team_member',  [
            'team_id' => '7',
            'user_id' => '40',
        ]);

        /* Team eQuality. main Team member */
        $this->insert('team_member',  [
            'team_id' => '7',
            'user_id' => '45',
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

        /* Team eSport Rhein-Neckar 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '20',
            'user_id' => '17',
            'is_sub' => 0,
        ]);

        /* Team eSport Rhein-Neckar 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '20',
            'user_id' => '78',
            'is_sub' => 0,
        ]);

        /* Team eSport Rhein-Neckar 3v3 Team Member mrtz user id nachtragen */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '20',
            'user_id' => '7',
            'is_sub' => 0,
        ]);

        /* Team eSport Rhein-Neckar 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '20',
            'user_id' => '66',
            'is_sub' => 1,
        ]);

        /* Team eSport Rhein-Neckar main Team member */
        $this->insert('team_member',  [
            'team_id' => '9',
            'user_id' => '78',
        ]);

        /* Team eSport Rhein-Neckar main Team member */
        $this->insert('team_member',  [
            'team_id' => '9',
            'user_id' => '66',
        ]);

        /* Team eSport Rhein-Neckar main Team member mrtz user id nachtragen*/
        $this->insert('team_member',  [
            'team_id' => '9',
            'user_id' => '7',
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

        /* Team Agency 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '21',
            'user_id' => '58',
            'is_sub' => 0,
        ]);

        /* Team Agency 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '21',
            'user_id' => '70',
            'is_sub' => 0,
        ]);

        /* Team Agency 3v3 Team Member  tobi user ID Nachtragen*/
        $this->insert('sub_team_member',  [
            'sub_team_id' => '21',
            'user_id' => '7',
            'is_sub' => 0,
        ]);

        /* Team Agency 3v3 Team Member Swiches user ID Nachtragen*/
        $this->insert('sub_team_member',  [
            'sub_team_id' => '21',
            'user_id' => '7',
            'is_sub' => 1,
        ]);

        /* Team Agency main Team member tobi user ID Nachtragen*/
        $this->insert('team_member',  [
            'team_id' => '10',
            'user_id' => '7',
        ]);

        /* Team Agency main Team member Swiches user ID Nachtragen*/
        $this->insert('team_member',  [
            'team_id' => '10',
            'user_id' => '7',
        ]);

        /* Team Agency main Team member */
        $this->insert('team_member',  [
            'team_id' => '10',
            'user_id' => '70',
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

        /* Team The Dark Start 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '22',
            'user_id' => '41',
            'is_sub' => 0,
        ]);

        /* Team The Dark Start 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '22',
            'user_id' => '64',
            'is_sub' => 0,
        ]);

        /* Team The Dark Start 3v3 Team Member Nihil user ID Nachtragen*/
        $this->insert('sub_team_member',  [
            'sub_team_id' => '22',
            'user_id' => '7',
            'is_sub' => 0,
        ]);

        /* Team The Dark Start 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '22',
            'user_id' => '74',
            'is_sub' => 1,
        ]);

        /* Team The Dark Start main Team member Nihil user ID Nachtragen*/
        $this->insert('team_member',  [
            'team_id' => '11',
            'user_id' => '7',
        ]);

        /* Team The Dark Start main Team member */
        $this->insert('team_member',  [
            'team_id' => '11',
            'user_id' => '74',
        ]);

        /* Team The Dark Start main Team member */
        $this->insert('team_member',  [
            'team_id' => '11',
            'user_id' => '64',
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

        /* Team Esport BERG 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '23',
            'user_id' => '56',
            'is_sub' => 0,
        ]);

        /* Team Esport BERG 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '23',
            'user_id' => '62',
            'is_sub' => 0,
        ]);

        /* Team Esport BERG 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '23',
            'user_id' => '68',
            'is_sub' => 0,
        ]);

        /* Team Esport BERG 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '23',
            'user_id' => '63',
            'is_sub' => 1,
        ]);

        /* Team Esport BERG 3v3 Team Member LiFox user ID Nachtragen*/
        $this->insert('sub_team_member',  [
            'sub_team_id' => '23',
            'user_id' => '7',
            'is_sub' => 1,
        ]);

        /* Team Esport BERG main Team member LiFox user ID Nachtragen*/
        $this->insert('team_member',  [
            'team_id' => '12',
            'user_id' => '7',
        ]);

        /* Team Esport BERG main Team member */
        $this->insert('team_member',  [
            'team_id' => '12',
            'user_id' => '63',
        ]);

        /* Team Esport BERG main Team member */
        $this->insert('team_member',  [
            'team_id' => '12',
            'user_id' => '68',
        ]);

        /* Team Esport BERG main Team member */
        $this->insert('team_member',  [
            'team_id' => '12',
            'user_id' => '62',
        ]);

        /** Team Safari Force **/
        /* 3v3 Sub Team Esport BERG */
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

        /* Team Esport BERG 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '24',
            'user_id' => '71',
            'is_sub' => 0,
        ]);

        /* Team Esport BERG 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '24',
            'user_id' => '73',
            'is_sub' => 0,
        ]);

        /* Team Esport BERG 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '24',
            'user_id' => '72',
            'is_sub' => 0,
        ]);

        /* Team Esport BERG main Team member */
        $this->insert('team_member',  [
            'team_id' => '15',
            'user_id' => '72',
        ]);

        /* Team Esport BERG main Team member */
        $this->insert('team_member',  [
            'team_id' => '15',
            'user_id' => '73',
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
