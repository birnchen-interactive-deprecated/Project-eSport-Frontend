<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 12:55
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * Class Tournament
 * @package app\modules\core\models
 *
 * @property int $rules_id
 * @property int $game_id
 * @property string $name
 */
class tournament_rules
{
    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'rules_id' => Yii::t('app', 'rules id'),
            'game_id' => Yii::t('app', 'game id'),
            'name' => Yii::t('app', 'name')
        ];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->rules_id;
    }

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @return string
     */
    public function getRulesName()
    {
        return $this->name;
    }

    /**
     * Finds user by username.
     *
     * @param string $rulesName the name
     * @return static|null the tournament, if a tournament with that tournament name exists
     */
    public static function findByRulesName($rulesName)
    {
        return static::findOne(['name' => $rulesName]);
    }
}