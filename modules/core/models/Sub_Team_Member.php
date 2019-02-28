<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 19:13
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Sub_Team_Member
 * @package app\modules\core\models
 *
 * @property int $sub_team_id
 * @property int $user_id
 * @property int $game_id
 * @property int $tournament_mode_id
 * @property bool $s_sub
 */
class Sub_Team_Member extends ActiveRecord
{
    /**
     * @return int
     */
    public function getSubTeamIdId()
    {
        return $this->sub_team_id;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @return int
     */
    public function getTournamentModeId()
    {
        return $this->tournament_mode_id;
    }

    /**
     * @return bool
     */
    public function getIsSubstitute()
    {
        return $this->s_sub;
    }
}