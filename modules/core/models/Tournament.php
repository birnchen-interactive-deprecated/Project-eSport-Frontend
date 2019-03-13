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
use yii\helpers\Html;
use app\modules\core\models\SubTeamMember;

/**
 * Class Tournament
 * @package app\modules\core\models
 *
 * @property int $tournament_id
 * @property int $game_id
 * @property int $mode_id
 * @property int $rules_id
 * @property int $bracket_id
 * @property int $cup_id
 * @property string $tournament_name
 * @property string $tournament_description
 * @property string $dt_starting_time
 * @property string $dt_register_begin
 * @property string $dt_register_end
 * @property string $dt_checkin_begin
 * @property string $dt_checkin_ends
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
            'dt_register_begin' => Yii::t('app', 'dt register begin'),
            'dt_register_end' => Yii::t('app', 'dt register end'),
            'dt_checkin_begin' => Yii::t('app', 'dt checkin begin'),
            'dt_checkin_ends' => Yii::t('app', 'dt checkin end'),
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
     * @return int
     */
    public function getCupId()
    {
        return $this->cup_id;
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
    public function showRealTournamentName() {

        $cup = $this->getCup()->one();
        $tMode = $this->getMode()->one();

        $cupName = $cup->getName();
        $season = 'S' . $cup->getSeason();

        $modeName = $tMode->getName();

        $dayName = $this->getTournamentName();

        return $cupName . ' ' . $season . ' ' . $modeName . ' ' . $dayName;
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
    public function getDtRegisterBegin()
    {
        return $this->dt_register_begin;
    }

    /**
     * @return string
     */
    public function getDtRegisterEnd()
    {
        return $this->dt_register_end;
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
        return $this->dt_checkin_ends;
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
     * @return boolean
     */
    public function showRegisterBtn($subTeams) {
        if ($this->getModeId() == 1) {
            return true;
        }

        if (count($subTeams) > 0) {
            return true;
        }

        return false;
    }

    /**
     * @return string
     */
    public function getRegisterBtns($subTeams, $user) {
        if ($this->getModeId() == 1) {
            
            $isParticipating = $this->checkPlayerParticipating($user);

            $btnValue = ($isParticipating) ? 'Abmelden' : 'Registrieren';
            $btnColor = ($isParticipating) ? 'btn-danger' : 'btn-success';

            $tmp = array(
                array(
                    'type' => 'user',
                    'id' => $user->getId(),
                    'name' => Html::tag('span', $user->getUsername()),
                    'btn' => Html::submitInput($btnValue, ['class' => 'btn ' . $btnColor, 'name' => 'submitText']),
                ),
            );
            return $tmp;
        }

        $retArr = array();
        foreach ($subTeams as $key => $subTeam) {
            
            if ($subTeam->getTournamentModeId() !== $this->getModeId()) {
                continue;
            }

            $modeMainPlayers = $this->getMode()->one()->getMainPlayer();

            $mainFound = 0;
            $teamMembers = SubTeamMember::getTeamMembers($subTeam->getId());
            foreach ($teamMembers as $key => $teamMember) {
                if ($teamMember->getIsSubstitute() === 0) {
                    $mainFound++;
                }
            }

            if ($mainFound < $modeMainPlayers) {
                continue;
            }

            $isParticipating = $this->checkTeamParticipating($subTeam);

            $btnValue = ($isParticipating) ? 'Abmelden' : 'Registrieren';
            $btnColor = ($isParticipating) ? 'btn-danger' : 'btn-success';

            $retArr[] = array(
                'type' => 'subTeam',
                'id' => $subTeam->getId(),
                'name' => Html::tag('span', $subTeam->getName()),
                'btn' => Html::submitInput($btnValue, ['class' => 'btn ' . $btnColor, 'name' => 'submitText']),
            );

        }

        return $retArr;

    }

    /**
     * @return boolean
     */
    private function checkPlayerParticipating($user) {
        $playerParticipating = PlayerParticipating::findPlayerParticipating($this->tournament_id, $user->getId());
        return (NULL === $playerParticipating) ? false : true;
    }

    /**
     * @return boolean
     */
    private function checkTeamParticipating($subTeam) {
        $teamParticipating = TeamParticipating::findTeamParticipating($this->tournament_id, $subTeam->getId());
        return (NULL === $teamParticipating) ? false : true;
    }

    /**
     * @return ActiveQuery
     */
    public function getCup()
    {
        return $this->hasOne(Cups::className(), ['cup_id' => 'cup_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getMode()
    {
        return $this->hasOne(TournamentMode::className(), ['mode_id' => 'mode_id']);
    }

    /**
     * @return ActiveQuery
     */
    public static function getRLTournaments()
    {
        return static::findAll(['game_id' => '1']);
    }
}