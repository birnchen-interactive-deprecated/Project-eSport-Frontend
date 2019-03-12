<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 18.02.2019
 * Time: 09:54
 */

namespace app\modules\core\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class Tournament
 * @package app\modules\core\models
 *
 * @property int $tournament_id
 * @property int $game_id
 * @property int $mode_id
 * @property int $rules_id
 * @property int $bracket_id
 * @property string $tournament_name
 * @property string $tournament_description
 * @property string $dt_starting_time
 * @property string $dt_checkin_begin
 * @property string $dt_checkin_end
 * @property bool $has_password
 * @property string $password
 */
class Tournament extends ActiveRecord
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
            'tournament_name' => Yii::t('app', 'tournament name'),
            'tournament_description' => Yii::t('app', 'tournament description'),
            'dt_starting_time' => Yii::t('app', 'dt starting time'),
            'dt_checkin_begin' => Yii::t('app', 'dt checkin begin'),
            'dt_checkin_end' => Yii::t('app', 'dt checkin end'),
            'has_password' => Yii::t('app', 'has password'),
            'password' => Yii::t('app', 'password')

        ];
    }

    /**
     * @return string
     */
    public static function tableName()
    {
        return 'tournaments';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->tournament_id;
    }

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @return int
     */
    public function getModeId()
    {
        return $this->mode_id;
    }

    /**
     * @return int
     */
    public function getRulesId()
    {
        return $this->rules_id;
    }

    /**
     * @return int
     */
    public function getBracketId()
    {
        return $this->bracket_id;
    }

    /**
     * @return string
     */
    public function getTournamentName()
    {
        return $this->tournament_name;
    }

    /**
     * @return string
     */
    public function getTournamentDescription()
    {
        return $this->tournament_description;
    }

    /**
     * @return string
     */
    public function getDtStartingTime()
    {
        return $this->dt_starting_time;
    }

    /**
     * @return string
     */
    public function getDtCheckinBegin()
    {
        return $this->dt_checkin_begin;
    }

    /**
     * @return string
     */
    public function getDtCheckinEnd()
    {
        return $this->dt_checkin_end;
    }

    /**
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->has_password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Finds user by username.
     *
     * @param string $tournamentname the name
     * @return static|null the tournament, if a tournament with that tournament name exists
     */
    public static function findByTournamentName($tournamentname)
    {
        return static::findOne(['tournament_name' => $tournamentname]);
    }

    /**
     * @return ActiveQuery
     */
    public static function getRLTournaments()
    {
        return static::findAll(['game_id' => '1']);
    }
}