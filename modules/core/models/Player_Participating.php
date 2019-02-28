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
 * Class Player_Participating
 * @package app\modules\core\models
 *
 * @property int $tournament_id
 * @property string $user_id
 * @property bool $cheked_in
 */
class Player_Participating extends ActiveRecord
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
        return $this->cheked_in;
    }
}