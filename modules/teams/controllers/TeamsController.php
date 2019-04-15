<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 27.03.2019
 * Time: 09:49
 */

namespace app\modules\teams\controllers;

use app\components\BaseController;
use app\modules\core\models\MainTeam;
use app\modules\core\models\ProfilePicForm;
use app\modules\core\models\SubTeam;
use DateTime;
use Yii;
use yii\web\UploadedFile;
use yii\filters\AccessControl;


class TeamsController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ]
        ];
    }

    /**
     * Main Team Details Page
     *
     * @param null $id
     * @return string
     * @throws \Exception
     */
    public function actionTeamDetails($id = null)
    {
        $teamDetails = MainTeam::findOne(['team_id' => $id]);

        /** @var ProfilePicForm $profilePicModel */
        $profilePicModel = new ProfilePicForm(ProfilePicForm::SCENARIO_MAINTEAM);
        $profilePicModel->id = $id;

        if ($profilePicModel->load(Yii::$app->request->post())) {
            $profilePicModel->file = UploadedFile::getInstance($profilePicModel, 'file');
            if ($profilePicModel->validate()) {
                $profilePicModel->save();
            }
        }

        /* Get Register Date and Age */
        $memberDateTime = new DateTime('2019-03-01');

        /** @var $teamInfo array */
        $teamInfo = [
            'isOwner' => (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $teamDetails->owner_id) ? true : false,
            //'memberSince' => DateTime::createFromFormat('d.m.y', $user->dt_created),
            'memberSince' => $memberDateTime->format('d.m.y'),
            'language' => $teamDetails->getHeadQuarterId(),
            //'nationality' => $teamDetails->getHeadQuarterId(),
            'nationalityImg' => Yii::getAlias("@web") . '/images/nationality/' . $teamDetails->getHeadQuarterId() . '.png',
            'teamImage' => Yii::getAlias("@web") . '/images/teams/mainTeams/' . $teamDetails->getId()
        ];

        /* Set Correct Image Path */
        if (!is_file($_SERVER['DOCUMENT_ROOT'] . $teamInfo['teamImage'] . '.webp')) {
            if (!is_file($_SERVER['DOCUMENT_ROOT'] . $teamInfo['teamImage'] . '.png')) {
                $teamInfo['teamImage'] = Yii::getAlias("@web") . '/images/userAvatar/default';
            }
        }

        return $this->render('teamDetails',
            [
                'profilePicModel' => $profilePicModel,
                'teamDetails' => $teamDetails,
                'teamInfo' => $teamInfo,
            ]);
    }

    /**
     * Sub Team Details Page
     *
     * @param null $id
     * @return string
     * @throws \Exception
     */
    public function actionSubTeamDetails($id = null)
    {
        $teamDetails = SubTeam::findOne(['sub_team_id' => $id]);

        /** @var ProfilePicForm $profilePicModel */
        $profilePicModel = new ProfilePicForm(ProfilePicForm::SCENARIO_SUBTEAM);
        $profilePicModel->id = $id;

        if ($profilePicModel->load(Yii::$app->request->post())) {
            $profilePicModel->file = UploadedFile::getInstance($profilePicModel, 'file');
            if ($profilePicModel->validate()) {
                $profilePicModel->save();
            }
        }

        /* Get Register Date and Age */
        $memberDateTime = new DateTime('2019-03-01');

        /** @var $teamInfo array */
        $teamInfo = [
            'isOwner' => (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $teamDetails->team_captain_id) ? true : false,
            //'memberSince' => DateTime::createFromFormat('d.m.y', $user->dt_created),
            'memberSince' => $memberDateTime->format('d.m.y'),
            //'language' => $teamDetails->getHeadQuarterId(),
            //'nationality' => $teamDetails->getHeadQuarterId(),
            //'nationalityImg' => Yii::getAlias("@web") . '/images/nationality/' . $teamDetails->getHeadQuarterId() . '.png',
            'teamImage' => Yii::getAlias("@web") . '/images/teams/subTeams/' . $teamDetails->getId()
        ];

        /* Set Correct Image Path */
        if (!is_file($_SERVER['DOCUMENT_ROOT'] . $teamInfo['teamImage'] . '.webp')) {
            if (!is_file($_SERVER['DOCUMENT_ROOT'] . $teamInfo['teamImage'] . '.png')) {
                $teamInfo['teamImage'] = Yii::getAlias("@web") . '/images/userAvatar/default';
            }
        }


        return $this->render('subTeamDetails',
            [
                'profilePicModel' => $profilePicModel,
                'teamDetails' => $teamDetails,
                'teamInfo' => $teamInfo,
            ]);
    }
}