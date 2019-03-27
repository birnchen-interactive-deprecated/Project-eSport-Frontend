<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 27.03.2019
 * Time: 09:49
 */

namespace app\controllers;

use app\components\BaseController;
use app\modules\core\models\MainTeam;
use app\modules\core\models\SubTeam;
use Yii;


class TeamsController extends BaseController
{
    public function actionTeamDetails($id = null, $isSub = false)
    {
        $teamDetails = MainTeam::findOne(['team_id' => $id]);

        return $this->render('teamDetails',
        [
            'teamDetails' => $teamDetails,
        ]);
    }

    public function actionSubTeamDetails($id = null)
    {
        $teamDetails = SubTeam::findOne(['sub_team_id' => $id]);

        return $this->render('subTeamDetails',
        [
            'subTeamDetails' => $teamDetails,
        ]);
    }
}