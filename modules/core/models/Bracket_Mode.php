<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 16:32
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Bracket_Mode
 * @package app\modules\core\models
 *
 * @property int $bracket_mode_id
 * @property string $name
 * @property string $description
 */
class Bracket_Mode extends ActiveRecord
{
    /**
     * @return int the gender_id
     */
    public function getId()
    {
        return $this->bracket_mode_id;
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