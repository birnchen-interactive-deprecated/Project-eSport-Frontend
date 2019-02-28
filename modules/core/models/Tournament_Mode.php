<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 15:28
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Tournament_Mode
 * @package app\modules\core\models
 *
 * @property int $mode_id
 * @property int $game_id
 * @property string $name
 * @property string $description
 */
class Tournament_Mode extends ActiveRecord
{
    /**
     * @return int the gender_id
     */
    public function getId()
    {
        return $this->mode_id;
    }

    /**
     * @return int the gender name
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @return string the gender name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string the gender name
     */
    public function getDescription()
    {
        return $this->description;
    }
}