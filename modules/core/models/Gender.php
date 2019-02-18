<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 18.02.2019
 * Time: 12:37
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Gender
 * @package app\modules\core\models
 * @property int $gender_id
 * @property string $name
 */
class Gender extends ActiveRecord
{
    /**
     * @return int the gender_id
     */
    public function getGenderId()
    {
        return $this->gender_id;
    }

    /**
     * @return string the gender name
     */
    public function getName()
    {
        return $this->name;
    }
}