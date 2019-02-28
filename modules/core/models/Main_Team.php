<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 19:04
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * Class Main_Teams
 * @package app\modules\core\models
 *
 * @property int $team_id
 * @property int $owner_id
 * @property string $name
 * @property string $description
 */
class Main_Team extends ActiveRecord
{
    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'team_id' => Yii::t('app', 'team id'),
            'owner_id' => Yii::t('app', 'owner id'),
            'name' => Yii::t('app', 'name'),
            'description' => Yii::t('app', 'description')
        ];
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}