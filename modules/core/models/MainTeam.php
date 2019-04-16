<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 19:04
 */

namespace app\modules\core\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Class MainTeam
 * @package app\modules\core\models
 *
 * @property int $team_id//
 * @property int $owner_id
 * @property int $headquarter_id
 * @property string $name
 * @property string short_code
 * @property string $description
 */
class MainTeam extends ActiveRecord
{
    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'team_id' => Yii::t('app', 'team id'),
            'owner_id' => Yii::t('app', 'owner id'),
            'headquarter_id' => Yii::t('app', 'headquarter id'),
            'name' => Yii::t('app', 'name'),
            'short_code' => Yii::t('app', 'Tag'),
            'description' => Yii::t('app', 'description')
        ];
    }

    /**
     * @return string
     */
    public static function tableName()
    {
        return 'main_team';
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
     * @return ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['user_id' => 'owner_id']);
    }

    /**
     * @return int
     */
    public function getHeadQuarterId()
    {
        return $this->headquarter_id;
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
     * @return ActiveQuery
     */
    public function getTeamMember()
    {
        return $this->hasMany(TeamMember::className(), ['team_id' => 'team_id']);
    }

    /**
     * @return array
     */
    public function getTeamMemberWithOwner()
    {
        $members = [];
        $members[] = $this->hasOne(User::className(), ['user_id' => 'owner_id'])->one();
        foreach ($this->getTeamMember()->all() as $teamMemberKey => $teamMember) {
            $members[] = $teamMember->getUser()->one();
        }

        usort($members, function($a, $b) {
            return $a->getUsername() < $b->getUsername();
        });
        
        return $members;
    }

    /**
     * @return ActiveQuery
     */
    public function getSubTeams() {
        return $this->hasMany(SubTeam::className(), ['main_team_id' => 'team_id']);
    }


    /**
     * @return ActiveQuery
     */
    public function getSubTeamsGroupByTournamentMode() {
        
        $subTeams = $this->hasMany(SubTeam::className(), ['main_team_id' => 'team_id'])->orderBy('tournament_mode_id')->all();

        $subTeamsGrouped = [];
        foreach ($subTeams as $subTeamKey => $subTeam) {
            $tournamentModeName = $subTeam->getTournamentMode()->one()->getName();

            $subTeamsGrouped[$tournamentModeName][] = $subTeam;
        }

        return $subTeamsGrouped;
    }

    /**
     * @return string
     */
    // public function getTeamMemberFormatted()
    // {
    //     $users = $this->getTeamMember()->orderBy('user_id')->all();

    //     $userString = array_map(function ($arr) {
    //         $userName = $arr->getUser()->one()->getUsername();
    //         return $userName;
    //     }, $users);

    //     return implode('<br>', $userString);
    // }
}