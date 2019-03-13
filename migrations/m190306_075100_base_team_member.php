<?php

use yii\db\Migration;

/**
 * Class m190306_075100_base_team_member
 */
class m190306_075100_base_team_member extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /** Team REC **/
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

        /* Timeout Gaming main Team member */
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '54',
        ]);

        /* Timeout Gaming main Team member Yuko user id ändern*/
        $this->insert('team_member',  [
            'team_id' => '3',
            'user_id' => '7',
        ]);

        /** Team Stealth7 eSports **/
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
        /* Team Panicflip main Team member */
        $this->insert('team_member',  [
            'team_id' => '13',
            'user_id' => '43',
        ]);

        /** Team eQuality. **/
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
        /* Team Agency main Team member */
        $this->insert('team_member',  [
            'team_id' => '10',
            'user_id' => '59',
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
        /* Team Safari Force main Team member */
        $this->insert('team_member',  [
            'team_id' => '15',
            'user_id' => '72',
        ]);

        /* Team Safari Force main Team member */
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
        echo "m190306_075100_base_team_member cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190306_075100_base_team_member cannot be reverted.\n";

        return false;
    }
    */
}
