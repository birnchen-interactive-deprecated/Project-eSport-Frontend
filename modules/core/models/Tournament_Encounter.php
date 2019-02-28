<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 18.02.2019
 * Time: 16:38
 */

use yii\db\ActiveRecord;

/**
 * Class Tournament_Encounter
 * @package app\modules\core\models
 *
 * @property int $encounter_id
 * @property int $tournament_id
 * @property bool $winner_looser
 * @property int $tournament_round
 * @property int $team_1_id
 * @property int $team_2_id
 */
class Tournament_Encounter extends ActiveRecord
{
    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'encounter_id' => Yii::t('app', 'encounter id'),
            'tournament_id' => Yii::t('app', 'tournament id'),
            'mode_id' => Yii::t('app', 'mode id'),
            'winner_looser' => Yii::t('app', 'winner looser'),
            'tournament_round' => Yii::t('app', 'tournament round'),
            'team_1_id' => Yii::t('app', 'team 1 id'),
            'team_2_id' => Yii::t('app', 'team 2 id'),
        ];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->encounter_id;
    }

    /**
     * @return int
     */
    public function getTournamentId()
    {
        return $this->tournament_id;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournament()
    {
        return $this->hasOne(\app\modules\core\models\Tournament::className(), ['tournament_id' => 'tournament_id']);
    }

    /**
     * @return bool
     */
    public function getWinnerLooser()
    {
        return $this->winner_looser;
    }

    /**
     * @return int
     */
    public function getTournamentRound()
    {
        return $this->tournament_round;
    }

    /**
     * @return int
     */
    public function getTeamOneId()
    {
        return $this->team_1_id;
    }

    /**
     * @return int
     */
    public function getTeamTwoId()
    {
        return $this->team_2_id;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['encounter_id' => $id]);
    }
}