<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 19:04
 */

namespace app\modules\core\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class MainTeam
 * @package app\modules\core\models
 *
 * @property int $team_id//
 * @property int $owner_id
 * @property int $headquarter_id
 * @property string $name
 * @property string short_code
 * @property string $description
 */
class MainTeam extends ActiveRecord
{
    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'team_id' => Yii::t('app', 'team id'),
            'owner_id' => Yii::t('app', 'owner id'),
            'headquarter_id' => Yii::t('app', 'headquarter id'),
            'name' => Yii::t('app', 'name'),
            'short_code' => Yii::t('app', 'Tag'),
            'description' => Yii::t('app', 'description')
        ];
    }

    /**
     * @return string
     */
    public static function tableName()
    {
        return 'main_team';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->team_id;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return int
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['user_id' => 'owner_id']);
    }

    /**
     * @return int
     */
    public function getHeadQuarterId()
    {
        return $this->headquarter_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getShortCode()
    {
        return $this->short_code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


}