<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 18.02.2019
 * Time: 12:39
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Mail_Newsletter
 * @package app\modules\core\models
 * @property string $email
 * @property bool $newsletter
 */
class Mail_Newsletter extends ActiveRecord
{
    /**
     * @return string the email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return bool the newsletter
     */
    public function hasNewsletter()
    {
        return $this->newsletter;
    }
}