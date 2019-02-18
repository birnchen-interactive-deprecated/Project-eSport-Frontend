<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 18.02.2019
 * Time: 09:54
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Tournaments
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
class Tournaments extends ActiveRecord
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
     * If this is a new database record, create a random auth key and access token
     * for this user before we store the record into the database.
     *
     * @param boolean $insert true, if this is a new record
     *
     * @return boolean true, if the record should be saved
     * @throws \yii\base\Exception
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->generateAuthKey();
                $this->generateAccessToken();
            }
            return true;
        }
        return false;
    }

    /**
     * Revokes all authentication assignments after a user has been deleted.
     */
    public function afterDelete()
    {
        parent::afterDelete();

        Yii::$app->getAuthManager()->revokeAll($this->getId());
    }

    /**
     * @inheritdoc
     */
    public static function findTournamentById($id)
    {
        return static::findOne(['tournament_id' => $id]);
    }

    /**
     * Finds user by username.
     *
     * @param string $Tournamentname the name
     * @return static|null the user, if a user with that username exists
     */
    public static function findTournamentByName($Tournamentname)
    {
        return static::findOne(['tournament_name' => $Tournamentname]);
    }
}