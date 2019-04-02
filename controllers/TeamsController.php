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

    /**
     * @param int $id TeamId
     * @return string
     * @throws \Exception
     */
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
            'teamImage' => '/images/teams/mainTeams/' . $teamDetails->getId() . '.png'
        ];

        /* Set Correct Image Path */
        if (!is_file($_SERVER['DOCUMENT_ROOT'] . $teamInfo['teamImage'])) {
            $teamInfo['teamImage'] = '/images/userAvatar/default.png';
        }

        return $this->render('teamDetails',
        [
            'teamDetails' => $teamDetails,
            'teamInfo' => $teamInfo,
        ]);
    }

    /**
     * @param int $id Team Id
     * @return string
     */
    public function actionSubTeamDetails($id = null)
    {
        $teamDetails = SubTeam::findOne(['sub_team_id' => $id]);

        return $this->render('subTeamDetails',
        [
            'subTeamDetails' => $teamDetails,
        ]);
    }
}