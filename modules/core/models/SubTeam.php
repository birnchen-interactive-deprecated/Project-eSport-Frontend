<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 19:03
 */

namespace app\modules\core\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class SubTeam
 * @package app\modules\core\models
 *
 * @property int $sub_team_id
 * @property int $main_team_id
 * @property int $game_id
 * @property int $tournament_mode_id
 * @property int $team_captain_id
 * @property string $name
 * @property string $description
 * @property bool $disqualified
 */
class SubTeam extends ActiveRecord
{
    /**
     * @return array the attribute labels
     */
    public function attributeLabels()//
    {
        return [
            'sub_team_id' => Yii::t('app', 'sub team id'),
            'main_team_id' => Yii::t('app', 'main team id'),
            'game_id' => Yii::t('app', 'game id'),
            'tournament_mode_id' => Yii::t('app', 'tournament mode id'),
            'team_captain_id' => Yii::t('app', 'team captain id'),
            'name' => Yii::t('app', 'name'),
            'description' => Yii::t('app', 'description')
        ];
    }

    /**
     * @return string
     */
    public static function tableName()
    {
        return 'sub_team';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->sub_team_id;
    }

    /**
     * @return int
     */
    public function getMainTeamId()
    {
        return $this->main_team_id;
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
    public function getTournamentModeId()
    {
        return $this->tournament_mode_id;
    }

    /**
     * @return int
     */
    public function getTournamentMode()
    {
        return $this->hasOne(TournamentMode::className(), ['mode_id' => 'tournament_mode_id']);
    }

    /**
     * @return int
     */
    public function getTeamCaptainId()
    {
        return $this->team_captain_id;
    }

    /**
     * @return int
     */
    public function getTeamCaptain()
    {
        return $this->hasOne(User::className(), ['user_id' =>'team_captain_id']);
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

    /**
     * @return bool
     */
    public function getDisqualified()
    {
        return $this->disqualified;
    }

    /**
     * @return string
     */
    public function getCheckInStatus($tournamentId) {
        $isParticipating = $this->hasOne(TeamParticipating::className(), ['sub_team_id' => 'sub_team_id'])->where('tournament_id = ' . $tournamentId)->one();
        if (NULL == $isParticipating->getCheckedIn()) {
            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    public function getDisqualifiedStatus($tournamentId) {
        $isParticipating = $this->hasOne(TeamParticipating::className(), ['sub_team_id' => 'sub_team_id'])->where('tournament_id = ' . $tournamentId)->one();
        if (NULL == $isParticipating->getDisqualified()) {
            return false;
        }

        return true;
    }
    
    /**
     * @return string
     */
    public function getTeamMembersFormatted() {

        // $users = $this->hasMany(User::className(), ['user_id' => 'user_id'])->viaTable('sub_team_member', ['sub_team_id' => 'sub_team_id'], function($subTeamMember) {
        //     $subTeamMember->orderBy('is_sub');
        // })->orderBy('sub_team_member.is_sub')->all();

        // $users = $this->hasMany(User::className(), ['user_id' => 'user_id'])->joinWith('sub_team_member', true, 'INNER JOIN')->all();

        $users = $this->hasMany(SubTeamMember::className(), ['sub_team_id' => 'sub_team_id'])->orderBy('is_sub')->all();

        $userString = array_map(function($arr) {
            $userName = $arr->getUser()->one()->getUsername();
            $isSub = (1 === $arr->getIsSubstitute()) ? 'Substitute' : 'Spieler';
            return $userName . ' (' . $isSub . ')';
        }, $users);

        return implode('<br>', $userString);
    }

    /**
     * @return ActiveQuery
     */
    public function getTeamsByGame($gameID)
    {
        return static::findOne(['game_id' => $gameID]);
    }

    /**
     * @return array
     */
    public function getTeamHierarchyByGame($gameId) {

        $teamHierarchy = array();

        $subTeams = static::findAll(['game_id' => $gameId]);
        foreach ($subTeams as $key => $subTeam) {

            $mainTeam = $subTeam->hasOne(MainTeam::className(), ['team_id' => 'main_team_id'])->one();
            $subTeamMember = $subTeam->hasMany(SubTeamMember::className(), ['sub_team_id' => 'sub_team_id'])->orderBy('is_sub')->all();

            if (!array_key_exists($mainTeam->getId(), $teamHierarchy)) {
                $teamHierarchy[$mainTeam->getId()] = array(
                    'mainTeam' => $mainTeam,
                    'subTeams' => array(),
                );
            }

            $teamHierarchy[$mainTeam->getId()]['subTeams'][] = array(
                'subTeam' => $subTeam,
                'subTeamMember' => $subTeamMember,
            );
        }

        return $teamHierarchy;
    }
}