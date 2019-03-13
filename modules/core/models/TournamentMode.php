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
 * Class TournamentMode
 * @package app\modules\core\models
 *
 * @property int $mode_id
 * @property int $game_id
 * @property string $name
 * @property int $main_player
 * @property int $sub_player
 * @property string $description
 */
class TournamentMode extends ActiveRecord
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
    public function getMainPlayer()
    {
        return $this->main_player;
    }

    /**
     * @return string the gender name
     */
    public function getSubPlayer()
    {
        return $this->sub_player;
    }

    /**
     * @return string the gender name
     */
    public function getDescription()
    {
        return $this->description;
    }
}