<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 19:13
 */

namespace app\modules\core\models;

use yii\db\ActiveRecord;

/**
 * Class Main_Team_Member
 * @package app\modules\core\models
 *
 * @property int $team_id
 * @property int $user_id
 */
class Main_Team_Member extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName() {
        return 'team_member';
    }

    /**
     * @return int the gender_id
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * @return int the gender_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}