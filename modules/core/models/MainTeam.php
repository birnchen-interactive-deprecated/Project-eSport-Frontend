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
     * @return string
     */
    public function getTeamMembersFormatted()
    {
        $users = $this->getTeamMember();

        $userString = array_map(function ($arr) {
            $userName = $arr->getUser()->one()->getUsername();
            return $userName;
        }, $users);

        return implode('<br>', $userString);
    }

    /**
     * @return ActiveQuery
     */
    public function getTeamMember()
    {
        return $this->hasMany(TeamMember::className(), ['team_id' => 'team_id']);
        //return TeamMember::findAll(['team_id' => 'team_id']);
        //return $this->hasMany(TeamMember::find(), ['team_id' => 'team_id']);
    }

    public function setProfilePic($profilePic)
    {
        $docRoot = $_SERVER['DOCUMENT_ROOT'];
        $filePathPng = $docRoot . '/images/teams/mainTeams/' . $this->team_id . '.png';
        $filePathWebp = $docRoot . '/images/teams/mainTeams/' . $this->team_id . '.webp';

        $profilePic->moveTo($filePathPng);

        // Buggy mit 7.0.33, sollte ab 7.1.x aufwärts laufen, wenn "WebP Support === true"
        // $im = imagecreatefrompng($filePathPng);
        // imagewebp($im, $filePathWebp);

        // Workaround
        $cmd = escapeshellcmd('cwebp ' . $filePathPng . ' -o ' . $filePathWebp);
        shell_exec($cmd);
    }

}