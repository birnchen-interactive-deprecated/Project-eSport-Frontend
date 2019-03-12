<?php
/**
 * Created by PhpStorm.
 * User: Wenk
 * Date: 24.08.2018
 * Time: 12:37
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Language
 * @package app\modules\core\models
 *
 * @property int $language_id
 * @property string $name
 * @property string $locale
 */
class Language extends ActiveRecord
{
    /**
     * @return int the language id
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * @return string the language title
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string the language locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

}