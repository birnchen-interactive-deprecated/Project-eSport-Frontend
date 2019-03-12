<?php

use yii\db\Migration;

/**
 * Class m190306_075018_base_tournaments
 */
class m190306_075018_base_tournaments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /* Tournaments GERTA CUP Season 1 - Day 1 */
        $this->insert('tournaments',  [
            'tournament_id' => '1',
            'game_id' => '1',
            'mode_id' => '1',
            'rules_id' => '1',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 1v1 Day 1',
            'tournament_description' => 'Erster Spieltag im 1v1',
            'dt_starting_time' => '2019-03-01 18:30:00',
            'dt_checkin_begin' => '2019-03-01 18:00:00',
            'dt_checkin_ends' => '2019-03-01 18:15:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '2',
            'game_id' => '1',
            'mode_id' => '2',
            'rules_id' => '2',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 2v2 Day 1',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-03-02 18:00:00',
            'dt_checkin_begin' => '2019-03-02 17:30:00',
            'dt_checkin_ends' => '2019-03-02 17:45:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '3',
            'game_id' => '1',
            'mode_id' => '3',
            'rules_id' => '3',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 3v3 Day 1',
            'tournament_description' => 'Erster Spieltag im 3v3',
            'dt_starting_time' => '2019-03-03 17:30:00',
            'dt_checkin_begin' => '2019-03-03 17:00:00',
            'dt_checkin_ends' => '2019-03-03 17:15:00',
        ]);

        /* Tournaments GERTA CUP Season 1 - Day 2 */
        $this->insert('tournaments',  [
            'tournament_id' => '4',
            'game_id' => '1',
            'mode_id' => '1',
            'rules_id' => '1',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 1v1 Day 2',
            'tournament_description' => 'Erster Spieltag im 1v1',
            'dt_starting_time' => '2019-03-015 18:30:00',
            'dt_checkin_begin' => '2019-03-15 18:00:00',
            'dt_checkin_ends' => '2019-03-15 18:15:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '5',
            'game_id' => '1',
            'mode_id' => '2',
            'rules_id' => '2',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 2v2 Day 2',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-03-16 18:00:00',
            'dt_checkin_begin' => '2019-03-16 17:30:00',
            'dt_checkin_ends' => '2019-03-16 17:45:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '6',
            'game_id' => '1',
            'mode_id' => '3',
            'rules_id' => '3',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 3v3 Day 2',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-03-17 17:30:00',
            'dt_checkin_begin' => '2019-03-17 17:00:00',
            'dt_checkin_ends' => '2019-03-17 17:15:00',
        ]);

        /* Tournaments GERTA CUP Season 1 - Day 3 */
        $this->insert('tournaments',  [
            'tournament_id' => '7',
            'game_id' => '1',
            'mode_id' => '1',
            'rules_id' => '1',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 1v1 Day 3',
            'tournament_description' => 'Erster Spieltag im 1v1',
            'dt_starting_time' => '2019-03-29 18:30:00',
            'dt_checkin_begin' => '2019-03-29 18:00:00',
            'dt_checkin_ends' => '2019-03-29 18:15:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '8',
            'game_id' => '1',
            'mode_id' => '2',
            'rules_id' => '2',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 2v2 Day 3',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-03-30 18:00:00',
            'dt_checkin_begin' => '2019-03-30 17:30:00',
            'dt_checkin_ends' => '2019-03-30 17:45:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '9',
            'game_id' => '1',
            'mode_id' => '3',
            'rules_id' => '3',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 3v3 Day 3',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-03-31 17:30:00',
            'dt_checkin_begin' => '2019-03-31 17:00:00',
            'dt_checkin_ends' => '2019-03-31 17:15:00',
        ]);

        /* Tournaments GERTA CUP Season 1 - Day 4 */
        $this->insert('tournaments',  [
            'tournament_id' => '10',
            'game_id' => '1',
            'mode_id' => '1',
            'rules_id' => '1',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 1v1 Day 4',
            'tournament_description' => 'Erster Spieltag im 1v1',
            'dt_starting_time' => '2019-04-12 18:30:00',
            'dt_checkin_begin' => '2019-04-12 18:00:00',
            'dt_checkin_ends' => '2019-04-12 18:15:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '11',
            'game_id' => '1',
            'mode_id' => '2',
            'rules_id' => '2',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 2v2 Day 4',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-04-13 18:00:00',
            'dt_checkin_begin' => '2019-04-13 17:30:00',
            'dt_checkin_ends' => '2019-04-13 17:45:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '12',
            'game_id' => '1',
            'mode_id' => '3',
            'rules_id' => '3',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 3v3 Day 4',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-04-14 17:30:00',
            'dt_checkin_begin' => '2019-04-14 17:00:00',
            'dt_checkin_ends' => '2019-04-14 17:15:00',
        ]);

        /* Tournaments GERTA CUP Season 1 - Day 5 */
        $this->insert('tournaments',  [
            'tournament_id' => '13',
            'game_id' => '1',
            'mode_id' => '1',
            'rules_id' => '1',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 1v1 Day 5',
            'tournament_description' => 'Erster Spieltag im 1v1',
            'dt_starting_time' => '2019-04-26 18:30:00',
            'dt_checkin_begin' => '2019-04-26 18:00:00',
            'dt_checkin_ends' => '2019-04-26 18:15:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '14',
            'game_id' => '1',
            'mode_id' => '2',
            'rules_id' => '2',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 2v2 Day 5',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-04-27 18:00:00',
            'dt_checkin_begin' => '2019-04-27 17:30:00',
            'dt_checkin_ends' => '2019-04-27 17:45:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '15',
            'game_id' => '1',
            'mode_id' => '3',
            'rules_id' => '3',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 3v3 Day 5',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-04-28 17:30:00',
            'dt_checkin_begin' => '2019-04-28 17:00:00',
            'dt_checkin_ends' => '2019-04-28 17:15:00',
        ]);

        /* Tournaments GERTA CUP Season 1 - Day 6 */
        $this->insert('tournaments',  [
            'tournament_id' => '16',
            'game_id' => '1',
            'mode_id' => '1',
            'rules_id' => '1',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 1v1 Day 6',
            'tournament_description' => 'Erster Spieltag im 1v1',
            'dt_starting_time' => '2019-05-10 18:30:00',
            'dt_checkin_begin' => '2019-05-10 18:00:00',
            'dt_checkin_ends' => '2019-05-10 18:15:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '17',
            'game_id' => '1',
            'mode_id' => '2',
            'rules_id' => '2',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 2v2 Day 6',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-05-11 18:00:00',
            'dt_checkin_begin' => '2019-05-11 17:30:00',
            'dt_checkin_ends' => '2019-05-11 17:45:00',
        ]);

        $this->insert('tournaments',  [
            'tournament_id' => '18',
            'game_id' => '1',
            'mode_id' => '3',
            'rules_id' => '3',
            'bracket_id' => '2',
            'tournament_name' => 'GERTA Cup 3v3 Day 6',
            'tournament_description' => 'Erster Spieltag im 2v2',
            'dt_starting_time' => '2019-05-12 17:30:00',
            'dt_checkin_begin' => '2019-05-12 17:00:00',
            'dt_checkin_ends' => '2019-05-12 17:15:00',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
