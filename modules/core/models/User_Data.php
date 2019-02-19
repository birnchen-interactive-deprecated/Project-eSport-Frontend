<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 18.02.2019
 * Time: 12:43
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * Class Tournament
 * @package app\modules\core\models
 *
 * @property int $user_id
 * @property string $pre_name
 * @property string $last_name
 * @property string $zip_code
 * @property string $city
 * @property string $street
 */
class User_Data extends ActiveRecord
{

    /**
     * @inheritDoc
     */
    public static function tableName()
    {
        return '{{%user_data}}';
    }

    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'user id'),
            'pre_name' => Yii::t('app', 'pre name'),
            'last_name' => Yii::t('app', 'last name'),
            'zip_code' => Yii::t('app', 'zip code'),
            'city' => Yii::t('app', 'city'),
            'street' =>Yii::t('app', 'street')
        ];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getPreName()
    {
        return $this->pre_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }
}