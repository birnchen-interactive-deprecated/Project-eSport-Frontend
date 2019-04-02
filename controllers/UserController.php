<?php

namespace app\controllers;

use app\components\BaseController;
use app\modules\core\models\User;
use DateTime;
use Yii;

class UserController extends BaseController
{
    /**
     * Display User Account Informations
     *
     * @param $id
     * @return string
     * @throws \yii\base\Exception
     */
    public function actionDetails($id)//
    {
        /** Check if user ID my own User ID */
        $isMySelfe = (Yii::$app->user->identity != null && Yii::$app->user->identity->getId() == $id) ? true : false;

        /** Profile Pic Uploader */
        $profilePic = NULL;
        if (is_array($_FILES) && isset($_FILES['profilePic'])) {
            $profilePic = new \GuzzleHttp\Psr7\UploadedFile($_FILES['profilePic']['tmp_name'], $_FILES['profilePic']['size'], $_FILES['profilePic']['error']);
        }

        /** @var User $user */
        $user = User::findIdentity($id);

        if (NULL !== $profilePic && 0 === $profilePic->getError()) {
            $user->setProfilePic($profilePic);
        }

        /** @var $userInfo array */
        $userInfo = [
            'isMySelfe' => $isMySelfe,
            'memberSince' => DateTime::createFromFormat('Y-m-d H:i:s', $user->dt_created)->format('d.m.y'),
            //'memberSince' => $memberDateTime->format('d.m.y'),
            'age' => (new DateTime($user->birthday))->diff(new DateTime())->y,
            'gender' => $user->getGender()->one(),
            'language' => $user->getLanguage()->one(),
            'nationality' => $user->getNationality()->one(),
            'nationalityImg' => '/images/nationality/' . $user->getNationalityId() . '.png',
            'playerImage' => '/images/userAvatar/' . $user->getId() . '.png'
        ];

        /* Set Correct Image Path */
        if (!is_file($_SERVER['DOCUMENT_ROOT'] . $userInfo['playerImage'])) {
            $userInfo['playerImage'] = '/images/userAvatar/default.png';
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
                'model' => $user,
                'userInfo' => $userInfo,
                'mainTeams' => $mainTeams,
                'subTeams' => $subTeams
            ]);
    }
}