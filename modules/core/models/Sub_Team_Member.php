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
 * Class Sub_Team_Member
 * @package app\modules\core\models
 *
 * @property int $sub_team_id
 * @property int $user_id
 * @property bool $s_sub
 */
class Sub_Team_Member extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName() {
        return 'sub_team_member';
    }

    /**
     * @return int
     */
    public function getSubTeamIdId()
    {
        return $this->sub_team_id;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return bool
     */
    public function getIsSubstitute()
    {
        return $this->s_sub;
    }
}