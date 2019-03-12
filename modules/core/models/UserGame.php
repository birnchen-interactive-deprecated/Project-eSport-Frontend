<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 18.02.2019
 * Time: 10:02
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class UserGame
 * @package app\modules\core\models
 * @property int $user_id
 * @property int $game_id
 */
class UserGame extends ActiveRecord
{
    /**
     * @return int the user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return int the Game id
     */
    public function getGameId()
    {
        return $this->game_id;
    }
}