<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 16:39
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Player_Participating
 * @package app\modules\core\models
 *
 * @property int $tournament_id
 * @property string $sub_team_id
 * @property bool $checked_in
 * @property bool $disqualified
 */
class Team_Participating extends ActiveRecord
{
    /**
     * @return int
     */
    public function getId()
    {
        return $this->tournament_id;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->sub_team_id;
    }

    /**
     * @return bool
     */
    public function getCheckedIn()
    {
        return $this->checked_in;
    }

    /**
     * @return bool
     */
    public function getDisqualified()
    {
        return $this->disqualified;
    }
}