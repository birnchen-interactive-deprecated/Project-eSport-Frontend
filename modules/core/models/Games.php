<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 15:25
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Games
 * @package app\modules\core\models
 *
 * @property int $games_id
 * @property string $name
 * @property string $description
 */
class Games extends ActiveRecord
{
    /**
     * @return int the gender_id
     */
    public function getId()
    {
        return $this->games_id;
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