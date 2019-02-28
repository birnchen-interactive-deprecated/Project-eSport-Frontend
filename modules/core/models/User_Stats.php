<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 17:15
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Games
 * @package app\modules\core\models
 *
 * @property int $user_id
 * @property int $tournament_encounter_points_id
 * @property string $points
 * @property string $goals
 * @property string $assists
 * @property string $saves
 * @property string $shots
 */
class User_Stats extends ActiveRecord
{
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
    public function getTournamentEncounterPointsId()
    {
        return $this->tournament_encounter_points_id;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @return int
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * @return int
     */
    public function getSaves()
    {
        return $this->saves;
    }

    /**
     * @return int
     */
    public function getShots()
    {
        return $this->shots;
    }
}