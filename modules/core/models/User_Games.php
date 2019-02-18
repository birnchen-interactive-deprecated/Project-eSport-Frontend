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
 * Class User_Games
 * @package app\modules\core\models
 * @property int $user_id
 * @property int $games_id
 */
class User_Games extends ActiveRecord
{
    /**
     * @return int the user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return string the language title
     */
    public function getGamesId()
    {
        return $this->games_id;
    }
}