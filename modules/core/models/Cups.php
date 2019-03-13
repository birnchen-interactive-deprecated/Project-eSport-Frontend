<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 13.03.2019
 * Time: 12:35
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Gender
 * @package app\modules\core\models
 *
 * @property int $cup_id
 * @property string $name
 * @property int $season
 */
class Cups extends ActiveRecord
{
    /**
     * @return int the cup_id
     */
    public function getCupId()
    {
        return $this->cup_id;
    }

    /**
     * @return string the gender name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int the cup_id
     */
    public function getSeason()
    {
        return $this->season;
    }
}