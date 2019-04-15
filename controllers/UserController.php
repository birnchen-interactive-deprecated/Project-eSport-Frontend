<?php

namespace app\controllers;

use app\components\BaseController;
use app\modules\core\models\ProfilePicForm;
use app\modules\core\models\User;
use DateTime;
use Yii;
use yii\web\UploadedFile;

class UserController extends BaseController
{
    /**
     * Display User Account Informations
     *
     * @param $id
     * @return string
     * @throws \yii\base\Exception
     * @throws \Throwable
     */

    public function actionDetails($id)//
    {
        /** Check if user ID my own User ID */
        $isMySelfe = (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $id) ? true : false;

        /** @var User $user */
        $user = User::findIdentity($id);

        /** @var ProfilePicForm $profilePicModel */
        $profilePicModel = new ProfilePicForm(ProfilePicForm::SCENARIO_USER);
        $profilePicModel->id = $id;

        if ($profilePicModel->load(Yii::$app->request->post())) {
            $profilePicModel->file = UploadedFile::getInstance($profilePicModel, 'file');
            if ($profilePicModel->validate()) {
                $profilePicModel->save();
            }
        }

        /** @var $userInfo array */
        $userInfo = [
            'isMySelfe' => $isMySelfe,
            'memberSince' => DateTime::createFromFormat('Y-m-d H:i:s', $user->dt_created)->format('d.m.y'),
            'age' => (new DateTime($user->birthday))->diff(new DateTime())->y,
            'gender' => $user->getGender()->one(),
            'language' => $user->getLanguage()->one(),
            'nationality' => $user->getNationality()->one(),
            'nationalityImg' => Yii::getAlias("@web") . '/images/nationality/' . $user->getNationalityId() . '.png',
            'playerImage' => Yii::getAlias("@web") . '/images/userAvatar/' . $user->getId()
        ];

        /* Set Correct Image Path */
        if (!is_file($_SERVER['DOCUMENT_ROOT'] . $userInfo['playerImage'] . '.webp')) {
            if (!is_file($_SERVER['DOCUMENT_ROOT'] . $userInfo['playerImage'] . '.png')) {
                $userInfo['playerImage'] = Yii::getAlias("@web") . '/images/userAvatar/default';
            }
        }

        $MainTeams = $user->getOwnedMainTeams()->all();
        $MemberTeams = $user->getMemberMainTeams()->all();

        $mainTeams = [];
        foreach ($MainTeams as $mainTeam) {
            $mainTeams[] = [
                'owner' => true,
                'team' => $mainTeam
            ];
        }

        foreach ($MemberTeams as $memberTeam) {
            $mainTeams[] = [
                'owner' => false,
                'team' => $memberTeam
            ];
        }

        $subTeams = $user->getAllSubTeamsWithMembers();


        return $this->render('details',
            [
                'profilePicModel' => $profilePicModel,
                'model' => $user,
                'userInfo' => $userInfo,
                'mainTeams' => $mainTeams,
                'subTeams' => $subTeams
            ]);
    }
}