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
 * Class Nationality
 * @package app\modules\core\models
 *
 * @property int $nationality_id
 * @property string $name
 */
class Nationality extends ActiveRecord
{
    /**
     * @return int the nationality_id
     */
    public function getId()
    {
        return $this->nationality_id;
    }

    /**
     * @return string the gender name
     */
    public function getName()
    {
        return $this->name;
    }
}