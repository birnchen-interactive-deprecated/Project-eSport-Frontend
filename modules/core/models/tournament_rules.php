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
            'tournament_id' => Yii::t('app', 'tournament id'),
            'game_id' => Yii::t('app', 'game id'),
            'mode_id' => Yii::t('app', 'mode id'),
            'rules_id' => Yii::t('app', 'rules id'),
            'bracket_id' => Yii::t('app', 'bracket id'),
            'tournament_name' =>Yii::t('app', 'tournament name'),
            'tournament_description' =>Yii::t('app', 'tournament description'),
            'dt_starting_time' =>Yii::t('app', 'dt starting time'),
            'dt_checkin_begin' =>Yii::t('app', 'dt checkin begin'),
            'dt_checkin_end' =>Yii::t('app', 'dt checkin end'),
            'has_password' =>Yii::t('app', 'has password'),
            'password' =>Yii::t('app', 'password')

        ];
    }
}