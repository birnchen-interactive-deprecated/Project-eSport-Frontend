<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 19:03
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * Class Sub_Teams
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
class Sub_Teams extends ActiveRecord
{
    /**
     * @return array the attribute labels
     */
    //public function attributeLabels()//
    //{
    //    return [
    //        'sub_team_id' => Yii::t('app', 'sub team id'),
    //        'main_team_id' => Yii::t('app', 'main team id'),
    //        'game_id' => Yii::t('app', 'game id'),
    //        'tournament_mode_id' => Yii::t('app', 'tournament mode id'),
    //        'team_captain_id' => Yii::t('app', 'team captain id'),
    //        'name' =>Yii::t('app', 'name'),
    //        'description' =>Yii::t('app', 'description')
    //    ];
    //}

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
    public function getTeamCaptainId()
    {
        return $this->team_captain_id;
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
}