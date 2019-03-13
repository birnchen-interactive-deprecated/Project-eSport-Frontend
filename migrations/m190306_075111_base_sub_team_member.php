<?php

use yii\db\Migration;

/**
 * Class m190306_075111_base_sub_team_member
 */
class m190306_075111_base_sub_team_member extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /** Team REC **/
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

        /* REC 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '2',
            'user_id' => '85',
            'is_sub' => 0,
        ]);

        /** Team CaptainViper **/
        /* CaptainViper 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '3',
            'user_id' => '4',
            'is_sub' => 0,
        ]);

        /* CaptainViper 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '3',
            'user_id' => '13',
            'is_sub' => 0,
        ]);

        /* CaptainViper 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '3',
            'user_id' => '6',
            'is_sub' => 1,
        ]);

        /* CaptainViper 2v2 Team Member - Different Bünzlis */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '15',
            'user_id' => '11',
            'is_sub' => 0,
        ]);

        /* CaptainViper 2v2 Team Member - Different Bünzlis Stonie, user ID ändern*/
        //$this->insert('sub_team_member',  [
        //    'sub_team_id' => '15',
        //    'user_id' => '7',
        //    'is_sub' => 0,
        //]);

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

        /** Team Timeout Gaming **/
        /* Timeout Gaming 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '10',
            'user_id' => '53',
            'is_sub' => 0,
        ]);

        /* Timeout Gaming 2v2 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '10',
            'user_id' => '30',
            'is_sub' => 0,
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

        /* Timeout 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '6',
            'user_id' => '54',
            'is_sub' => 1,
        ]);

        /* Timeout 3v3 Team Member Yuko user id ändern*/
        ////]);

        /** Team Stealth7 eSports **/
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

        /** Team AcTive **/
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

        /** Team Acpect **/
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

        /** Team Thinking **/
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

        /** Team Panicflip by Orbital Gaming **/
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

        /** Team eQuality. **/
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

        /** Team eSport Rhein-Neckar **/
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
        //$this->insert('sub_team_member',  [
        //    'sub_team_id' => '20',
        //    'user_id' => '7',
        //    'is_sub' => 0,
        //]);

        /* Team eSport Rhein-Neckar 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '20',
            'user_id' => '66',
            'is_sub' => 1,
        ]);

        /** GHR E-Sports - Team Agency **/
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

        /* Team Agency 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '21',
            'user_id' => '59',
            'is_sub' => 0,
        ]);

        /* Team Agency 3v3 Team Member Swiches user ID Nachtragen*/
        //$this->insert('sub_team_member',  [
        //    'sub_team_id' => '21',
        //    'user_id' => '7',
        //    'is_sub' => 1,
        //]);

        /** Team The Dark Start **/
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

        /* Team The Dark Start 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '22',
            'user_id' => '74',
            'is_sub' => 0,
        ]);

        /** Team Esport BERG **/
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
        //$this->insert('sub_team_member',  [
        //    'sub_team_id' => '23',
        //    'user_id' => '7',
        //    'is_sub' => 1,
        //]);

        /** Team Safari Force **/
        /* Team Safari Force 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '24',
            'user_id' => '71',
            'is_sub' => 0,
        ]);

        /* Team Safari Force 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '24',
            'user_id' => '73',
            'is_sub' => 0,
        ]);

        /* Team Safari Force 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '24',
            'user_id' => '72',
            'is_sub' => 0,
        ]);

        /** Team Stage 5 Gaming Training **/
        /* Team Stage 5 Gaming Training 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '25',
            'user_id' => '80',
            'is_sub' => 0,
        ]);

        /* Team Stage 5 Gaming Training 3v3 Team Member */
        $this->insert('sub_team_member',  [
            'sub_team_id' => '25',
            'user_id' => '57',
            'is_sub' => 0,
        ]);//
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190306_075111_base_sub_team_member cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190306_075111_base_sub_team_member cannot be reverted.\n";

        return false;
    }
    */
}
