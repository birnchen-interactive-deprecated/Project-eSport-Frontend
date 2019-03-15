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
 * Class TeamParticipating
 * @package app\modules\core\models
 *
 * @property int $tournament_id
 * @property string $sub_team_id
 * @property bool $checked_in
 * @property bool $disqualified
 */
class TeamParticipating extends ActiveRecord
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

    /**
     * @return ActiveQuery
     */
    public static function findTeamParticipating($tournamentId, $subTeam) {
        return static::findOne(['tournament_id' => $tournamentId, 'sub_team_id' => $subTeam]);
    }

    /**
     * @return ActiveQuery
     */
    public static function findTeamCheckedIn($tournamentId, $subTeam) {
        return static::findOne(['tournament_id' => $tournamentId, 'sub_team_id' => $subTeam, 'checked_in' => 1]);
    }
}