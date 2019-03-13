<?php

use yii\db\Migration;

/**
 * Class m190306_075034_base_teams
 */
class m190306_075034_base_teams extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /* Main Team REC */
        $this->insert('main_team',  [
            'team_id' => '1',
            'owner_id' => '22',
            'headquarter_id' => '1',
            'name' => 'Robotic Elite Clan',
            'short_code' => 'REC',
            'description' => 'Auch Roboter sind Menschen',
        ]);

        /* Main Team Captain Viper */
        $this->insert('main_team',  [
            'team_id' => '2',
            'owner_id' => '4',
            'headquarter_id' => '2',
            'name' => 'Captain Viper',
            'short_code' => 'CV',
            'description' => 'Man of the Captain -> Viper',
        ]);

        /* Main Team Timeout Gaming */
        $this->insert('main_team',  [
            'team_id' => '3',
            'owner_id' => '14',
            'headquarter_id' => '1',
            'name' => 'Timeout Gaming',
            'short_code' => 'TG',
            'description' => 'The time is going out for the Game',
        ]);

        /* Main Team Stealth 7 eSports */
        $this->insert('main_team',  [
            'team_id' => '4',
            'owner_id' => '25',
            'headquarter_id' => '1',
            'name' => 'Stealth7 eSports',
            'short_code' => 'S7',
            'description' => 'Invisible Masters',
        ]);

        /* Main Team Ative */
        $this->insert('main_team',  [
            'team_id' => '5',
            'owner_id' => '10',
            'headquarter_id' => '1',
            'name' => 'AcTive',
            'short_code' => '',
            'description' => '',
        ]);

        /* Main Team Aspect */
        $this->insert('main_team',  [
            'team_id' => '6',
            'owner_id' => '19',
            'headquarter_id' => '1',
            'name' => 'Team Aspect',
            'short_code' => '',
            'description' => '',
        ]);

        /* Main Team eQuality. */
        $this->insert('main_team',  [
            'team_id' => '7',
            'owner_id' => '44',
            'headquarter_id' => '1',
            'name' => 'eQuality.',
            'short_code' => '',
            'description' => '',
        ]);

        /* Main Team Thinking */
        $this->insert('main_team',  [
            'team_id' => '8',
            'owner_id' => '9',
            'headquarter_id' => '1',
            'name' => 'Thinking',
            'short_code' => '',
            'description' => '',
        ]);

        /* Main Team eSport Rhein Neckar */
        $this->insert('main_team',  [
            'team_id' => '9',
            'owner_id' => '17',
            'headquarter_id' => '1',
            'name' => 'eSport Rhein Neckar',
            'short_code' => 'ERN',
            'description' => '',
        ]);

        /* Main Team GHR E-Sports */
        $this->insert('main_team',  [
            'team_id' => '10',
            'owner_id' => '58',
            'headquarter_id' => '1',
            'name' => 'GHR E-Sports',
            'short_code' => 'GHR',
            'description' => '',
        ]);

        /* Main Team The Dark Start */
        $this->insert('main_team',  [
            'team_id' => '11',
            'owner_id' => '41',
            'headquarter_id' => '1',
            'name' => 'The Dark Start',
            'short_code' => 'GHR',
            'description' => '',
        ]);

        /* Main Team Esport BERG */
        $this->insert('main_team',  [
            'team_id' => '12',
            'owner_id' => '56',
            'headquarter_id' => '1',
            'name' => 'Esport BERG',
            'short_code' => 'GHR',
            'description' => '',
        ]);

       /* Main Team Orbital Gaming */
        $this->insert('main_team',  [
            'team_id' => '13',
            'owner_id' => '42',
            'headquarter_id' => '1',
            'name' => 'Orbital Gaming',
            'short_code' => 'OG',
            'description' => '',
        ]);

        /* Main Team Stage 5 Gaming Training */
        $this->insert('main_team',  [
            'team_id' => '14',
            'owner_id' => '2',
            'headquarter_id' => '1',
            'name' => 'Stage 5 Gaming Training',
            'short_code' => 'S5GT',
            'description' => '',
        ]);

        /* Main Team Safari Force */
        $this->insert('main_team',  [
            'team_id' => '15',
            'owner_id' => '71',
            'headquarter_id' => '1',
            'name' => 'Safari Force',
            'short_code' => '',
            'description' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
