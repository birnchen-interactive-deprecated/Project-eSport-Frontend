<?php

namespace app\controllers;

use app\components\BaseController;
use app\modules\core\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Response;

class UserController extends BaseController
{
    // /**
    //  * {@inheritdoc}
    //  */
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'only' => ['logout'],
    //             'rules' => [
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function actions()
    // {
    //     return [
    //         'error' => [
    //             'class' => 'yii\web\ErrorAction',
    //         ],
    //         'captcha' => [
    //             'class' => 'yii\captcha\CaptchaAction',
    //             'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
    //         ],
    //     ];
    // }

    public function actionDetails($id)//
    {
        //if (Yii::$app->user->isGuest) {
        //    // return $this->render('index');
        //    return $this->goHome();
        //}

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