<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 03.04.2019
 * Time: 16:11
 */

namespace app\controllers;

use app\components\BaseController;
use app\modules\core\models\MainTeam;
use app\modules\core\models\SubTeam;
use Yii;
use DateTime;


class RocketLeagueController extends BaseController
{
    public function actionRlNewsDetails($id = null)
    {
        return $this->render('newsDetails');
    }

    public function actionRlTeamsOverview()
    {
        //if (Yii::$app->user->isGuest) {
        //    // return $this->render('index');
        //    return $this->goHome();
        //}

        // $subteams = SubTeam::getTeamsByGame(1);
        $teamHierarchy = SubTeam::getTeamHierarchyByGame(1);

        return $this->render('teamsOverview',
            [
                'teamHierarchy' => $teamHierarchy,
            ]
        );
    }
}