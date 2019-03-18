<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 16:36
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class PlayerParticipating
 * @package app\modules\core\models
 *
 * @property int $tournament_id
 * @property string $user_id
 * @property bool $checked_in
 * @property bool $disqualified
 */
class PlayerParticipating extends ActiveRecord
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
        return $this->user_id;
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
     * @param $tournamentId
     * @param $userId
     * @return ActiveRecord
     */
    public static function findPlayerParticipating($tournamentId, $userId)
    {
        return static::findOne(['tournament_id' => $tournamentId, 'user_id' => $userId]);
    }

    /**
     * @param $tournamentId
     * @param $userId
     * @return ActiveRecord
     */
    public static function findPlayerCheckedIn($tournamentId, $userId)
    {
        return static::findOne(['tournament_id' => $tournamentId, 'user_id' => $userId, 'checked_in' => 1]);
    }
}