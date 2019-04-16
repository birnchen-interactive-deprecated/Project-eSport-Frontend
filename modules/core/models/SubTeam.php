<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 19:03
 */

namespace app\modules\core\models;

use Yii;
use yii\db\ActiveQuery;
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
 * @property string $short_code
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
            'short_code' => Yii::t('app', 'short Code'),
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
     * @return \yii\db\ActiveQuery
     */
    public function getMainTeam()
    {
        return $this->hasOne(MainTeam::className(), ['team_id' => 'main_team_id']);
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
     * @return ActiveQuery
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
     * @return ActiveQuery
     */
    public function getTeamCaptain()
    {
        return $this->hasOne(User::className(), ['user_id' => 'team_captain_id']);
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

    /**
     * @return bool
     */
    public function getDisqualified()
    {
        return $this->disqualified;
    }

    /**
     * @param int $tournamentId
     * @return string
     */
    public function getCheckInStatus($tournamentId)
    {
        /** @var TeamParticipating $isParticipating */
        $isParticipating = $this->getTeamParticipating()->where('tournament_id = ' . $tournamentId)->one();
        return $isParticipating->getCheckedIn() != null;
    }

    /**
     * @param $tournamentId
     * @return string
     */
    public function getDisqualifiedStatus($tournamentId)
    {
        /** @var TeamParticipating $isParticipating */
        $isParticipating = $this->getTeamParticipating()->where('tournament_id = ' . $tournamentId)->one();
        return $isParticipating->getDisqualified() != null;
    }

    public function getTeamParticipating()
    {
        return $this->hasMany(TeamParticipating::className(), ['sub_team_id' => 'sub_team_id']);
    }

    /**
     * @return string
     */
    public function getTeamMembersFormatted()
    {
        $users = $this->getSubTeamMembers()->orderBy('is_sub')->all();

        $userString = array_map(function ($arr) {
            $userName = $arr->getUser()->one()->getUsername();
            $isSub = (1 === $arr->getIsSubstitute()) ? 'Substitute' : 'Spieler';
            return $userName . ' (' . $isSub . ')';
        }, $users);

        return implode('<br>', $userString);
    }

    /**
     * @param $gameID
     * @return ActiveRecord
     */
    public function getTeamsByGame($gameID)
    {
        //TODO: getTeams im Plural returned nen einzelnen ActiveRecord?
        return static::findOne(['game_id' => $gameID]);
    }

    /**
     * @return ActiveQuery
     */
    public function getSubTeamMembers()
    {
        return $this->hasMany(SubTeamMember::className(), ['sub_team_id' => 'sub_team_id']);
    }

    /**
     * @param $gameId
     * @return array
     */
    public function getTeamHierarchyByGame($gameId)
    {

        $teamHierarchy = array();

        /** @var SubTeam[] $subTeams */
        $subTeams = static::findAll(['game_id' => $gameId]);
        usort($subTeams, function ($a, $b) {

            $aName = $a->getMainTeam()->one()->getName();
            $bName = $b->getMainTeam()->one()->getName();

            $aSubName = $a->getName();
            $bSubName = $b->getName();

            return [$aName, $a->getTournamentModeId(), $aSubName] <=> [$bName, $b->getTournamentModeId(), $bSubName];
        });

        foreach ($subTeams as $key => $subTeam) {
            /** @var MainTeam $mainTeam */
            $mainTeam = $subTeam->getMainTeam()->one();
            // $subTeamMember = $subTeam->getSubTeamMembers()->orderBy('is_sub')->all();

            if (!array_key_exists($mainTeam->getId(), $teamHierarchy)) {
                $teamHierarchy[$mainTeam->getId()] = array(
                    'mainTeam' => $mainTeam,
                    'subTeams' => array(),
                );
            }

            $subTeamModeId = $subTeam->getTournamentMode()->one()->getName();

            $teamHierarchy[$mainTeam->getId()]['subTeams'][$subTeamModeId][] = array(
                'subTeam' => $subTeam,
                // 'subTeamMember' => $subTeamMember,
            );
        }

        return $teamHierarchy;
    }

    /**
     * @param $team_id
     * @return SubTeam[]
     */
    public function getSubTeams($team_id)
    {
        /** @var SubTeam[] $subTeams */
        $subTeams = static::findAll(['main_team_id' => $team_id]);

        return $subTeams;
    }

    /**
     * @param $userId
     * @return bool
     */
    public function isUserSubstitute($userId)
    {
        return $this->hasOne(SubTeamMember::className(), ['sub_team_id' => 'sub_team_id'])->where(['user_id' => $userId, 'is_sub' => 1])->count() == 1;
    }
}