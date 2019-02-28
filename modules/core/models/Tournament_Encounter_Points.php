<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 16:41
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * Class Tournament_Encounter_points
 * @package app\modules\core\models
 *
 * @property int $encounter_points_id
 * @property int $encounter_id
 * @property int $game_round
 * @property string $screen_team_1
 * @property string $screen_team_2
 * @property int $goals_team_1
 * @property int $goals_team_2
 * @property string $replay_team_1
 * @property string $replay_team_2
 * @property bool $accepted
 * @property int $winner_team_id
 */
class Tournament_Encounter_Points extends ActiveRecord
{
    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'encounter_points_id' => Yii::t('app', 'encounter points id'),
            'encounter_id' => Yii::t('app', 'encounter id'),
            'game_round' => Yii::t('app', 'game round'),
            'goals_team_1' => Yii::t('app', 'goals team 1'),
            'goals_team_2' => Yii::t('app', 'goals team 2'),
            'accepted' =>Yii::t('app', 'accepted'),
            'winner_team_id' =>Yii::t('app', 'winner team id')
        ];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->encounter_points_id;
    }

    /**
     * @return int
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * @return int
     */
    public function getGameRound()
    {
        return $this->game_round;
    }

    /**
     * @return string
     */
    public function getScreenTeam1()
    {
        return $this->screen_team_1;
    }

    /**
     * @return string
     */
    public function getScreenTeam2()
    {
        return $this->screen_team_2;
    }

    /**
     * @return int
     */
    public function getGoalsTeam1()
    {
        return $this->goals_team_1;
    }

    /**
     * @return int
     */
    public function getGoalsTeam2()
    {
        return $this->goals_team_2;
    }

    /**
     * @return string
     */
    public function getReplayTeam1()
    {
        return $this->replay_team_1;
    }

    /**
     * @return string
     */
    public function getReplayTeam2()
    {
        return $this->replay_team_2;
    }

    /**
     * @return bool
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * @return int
     */
    public function getWinnerTeamId()
    {
        return $this->winner_team_id;
    }

    /**
     * @inheritdoc
     */
    public static function findByEncounterPointsId($id)
    {
        return static::findOne(['encounter_points_id' => $id]);
    }

    /**
     * @inheritdoc
     */
    public static function findByEncounterId($id)
    {
        return static::findAll(['encounter_id' => $id]);
    }
}