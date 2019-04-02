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
use DateTime;


class TeamsController extends BaseController
{
    public function actionTeamDetails($id = null)
    {
        $teamDetails = MainTeam::findOne(['team_id' => $id]);

        /* Get Register Date and Age */
        $memberDateTime = new DateTime('2019-03-01');

        /** @var $teamInfo array */
        $teamInfo = [
            'isOwner' => false,
            //'memberSince' => DateTime::createFromFormat('d.m.y', $user->dt_created),
            'memberSince' => $memberDateTime->format('d.m.y'),
            'language' => $teamDetails->getHeadQuarterId(),
            //'nationality' => $teamDetails->getHeadQuarterId(),
            'nationalityImg' => '/images/nationality/' . $teamDetails->getHeadQuarterId() . '.png',
            'teamImage' => '/images/userAvatar/' . $teamDetails->getId() . '.png'
        ];

        return $this->render('teamDetails',
        [
            'teamDetails' => $teamDetails,
            'teamInfo' => $teamInfo,
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