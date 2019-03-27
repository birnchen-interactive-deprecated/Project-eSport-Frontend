<?php

namespace app\controllers;

use app\components\BaseController;
use app\modules\core\models\User;
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
        if(Yii::$app->user->identity != null)
            $isMySelfe = (Yii::$app->user->identity->getId() == $id) ? true : false;
        else
            $isMySelfe = false;

        $profilePic = NULL;
        if (is_array($_FILES) && isset($_FILES['profilePic'])) {
            $profilePic = new \GuzzleHttp\Psr7\UploadedFile($_FILES['profilePic']['tmp_name'], $_FILES['profilePic']['size'], $_FILES['profilePic']['error']);
        }

        /** @var User $user */
        $user = User::findIdentity($id);
        //$user = Yii::$app->user->identity;

        if (NULL !== $profilePic && 0 === $profilePic->getError()) {
            $user->setProfilePic($profilePic);
        }

        $gender = $user->getGender()->one();
        $language = $user->getLanguage()->one();
        $nationality = $user->getNationality()->one();

        $allMainTeams = $user->getOwnedMainTeams()->all();
        $allMemberTeams = $user->getMemberMainTeams()->all();

        $mainTeams = [];
        foreach ($allMainTeams as $mainTeam) {
            $mainTeams[] = [
                'owner' => true,
                'team' => $mainTeam
            ];
        }

        foreach ($allMemberTeams as $memberTeam) {
            $mainTeams[] = [
                'owner' => false,
                'team' => $memberTeam
            ];
        }

        $subTeams = $user->getAllSubTeamsWithMembers();

        return $this->render('details',
            [
                'model' => $user,
                'isMySelfe' => $isMySelfe,
                'gender' => $gender,
                'language' => $language,
                'nationality' => $nationality,
                'mainTeams' => $mainTeams,//
                'subTeams' => $subTeams
            ]);
    }
}