<?php

namespace app\controllers;

use app\components\BaseController;
use app\models\LoginForm;
use app\models\PasswordChangeForm;
use app\models\PasswordResetForm;
use app\modules\core\controllers\UserController;
use app\modules\core\models\Gender;
use app\modules\core\models\Language;
use app\modules\core\models\Nationality;
use app\modules\core\models\PlayerParticipating;
use app\modules\core\models\SubTeam;
use app\modules\core\models\TeamParticipating;
use app\modules\core\models\Tournament;
use app\modules\core\models\User;
use app\modules\core\models\UserForm;
use app\widgets\Alert;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;


class SiteController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            //return $this->actionMyAccount();
            //return $this->render('myAccount');
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Change password action.
     *
     * @return string
     * @throws \Throwable
     */
    public function actionPasswordChange()
    {
        $model = new PasswordChangeForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->saveNewPassword()) {
            return $this->goBack();
        }

        return $this->render('password_change', [
            'model' => $model,
        ]);
    }

    public function actionPasswordReset()
    {
        $model = new PasswordResetForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            /** @var User $user */
            $user = User::find()->where(['and', ['username' => $model->username], ['email' => $model->email]])->one();
            UserController::resetPassword($user->user_id);
            return $this->redirect(["login"]);
        }

        return $this->render('password_reset', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /* All Actions for the Logged In User */

    /**
     * Display User Account Informations
     *
     * @return string
     * @throws \Throwable
     * @throws \yii\base\Exception
     * @throws \yii\db\StaleObjectException
     */
    public function actionMyAccount()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('index');
            return $this->goHome();
        }

        $profilePic = NULL;
        if (is_array($_FILES) && isset($_FILES['profilePic'])) {
            $profilePic = new \GuzzleHttp\Psr7\UploadedFile($_FILES['profilePic']['tmp_name'], $_FILES['profilePic']['size'], $_FILES['profilePic']['error']);
        }

        /** @var User $user */
        $user = Yii::$app->user->identity;

        if (NULL !== $profilePic && 0 === $profilePic->getError()) {
            $user->setProfilePic($profilePic);
        }

        $gender = $user->getGender()->one();
        $language = $user->getLanguage()->one();
        $nationality = $user->getNationality()->one();

        $allMainTeams = $user->getMainTeams()->all();
        $allMemberTeams = $user->getMemberTeams()->all();

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

        // $allSubTeams = $user->getSubTeams()->all();
        // $allMemberTeams = $user->getSubMemberTeams()->all();

        // $subTeams = [];
        // foreach ($allSubTeams as $subTeam) {
        //     $subTeams[] = [
        //         'owner' => true,
        //         'team' => $subTeam,
        //     ];
        // }

        // foreach ($allMemberTeams as $subMemberTeam) {
        //     $subTeams[] = array(
        //         'owner' => false,
        //         'team' => $subMemberTeam,
        //     );
        // }

        return $this->render('myAccount',
            [
                'model' => $user,
                'gender' => $gender,
                'language' => $language,
                'nationality' => $nationality,
                'mainTeams' => $mainTeams,
                'subTeams' => $subTeams
            ]);
    }

    public function actionShowUser()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('index');
            return $this->goHome();
        }

        $userId = Yii::$app->request->get('id');

        $profilePic = NULL;
        if (is_array($_FILES) && isset($_FILES['profilePic'])) {
            $profilePic = new \GuzzleHttp\Psr7\UploadedFile($_FILES['profilePic']['tmp_name'], $_FILES['profilePic']['size'], $_FILES['profilePic']['error']);
        }

        /** @var User $user */
        $user = User::findIdentity($userId);
        //$user = Yii::$app->user->identity;

        if (NULL !== $profilePic && 0 === $profilePic->getError()) {
            $user->setProfilePic($profilePic);
        }

        $gender = $user->getGender()->one();
        $language = $user->getLanguage()->one();
        $nationality = $user->getNationality()->one();

        $allMainTeams = $user->getMainTeams()->all();
        $allMemberTeams = $user->getMemberTeams()->all();

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

        return $this->render('users/userDetails',
            [
                'model' => $user,
                'gender' => $gender,
                'language' => $language,
                'nationality' => $nationality,
                'mainTeams' => $mainTeams,
                'subTeams' => $subTeams
            ]);
    }

    public function actionTeamDetails()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('index');
            return $this->goHome();
        }

        return $this->render('teams/teamDetails');
    }

    /**
     * Displays User Tournaments.
     *
     * @return string
     */
    public function actionMyTournaments()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('index');
            return $this->goHome();
        }

        return $this->render('myTournaments');
    }

    /**
     * Displays User teams.
     *
     * @return string
     */
    public function actionMyTeams()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('index');
            return $this->goHome();
        }

        return $this->render('myTeams');
    }

    /** Rocket League Area **/

    public function actionRlTournaments()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('index');
            return $this->goHome();
        }

        if (is_array($_POST) && isset($_POST['tournamentId'])) {

            if (isset($_POST['user'])) {

                $turnierId = (int)$_POST['tournamentId'];
                $userId = (int)$_POST['user'];

                if ($_POST['submitText'] === 'Registrieren') {

                    $newPlayer = new PlayerParticipating();
                    $newPlayer->tournament_id = $turnierId;
                    $newPlayer->user_id = $userId;
                    $newPlayer->insert();

                } else if ($_POST['submitText'] === 'Abmelden') {
                    $playerParticipating = PlayerParticipating::findPlayerParticipating($turnierId, $userId);
                    if (NULL !== $playerParticipating) {
                        $playerParticipating->delete();
                    }
                } else if ($_POST['submitText'] === 'Check-In') {
                    $playerParticipating = PlayerParticipating::findPlayerParticipating($turnierId, $userId);
                    if (NULL !== $playerParticipating) {
                        $playerParticipating->checked_in = true;
                        $playerParticipating->update();
                    }
                } else if ($_POST['submitText'] === 'Check-Out') {
                    $playerParticipating = PlayerParticipating::findPlayerParticipating($turnierId, $userId);
                    if (NULL !== $playerParticipating) {
                        $playerParticipating->checked_in = null;
                        $playerParticipating->update();
                    }
                }

            } else if (isset($_POST['subTeam'])) {

                $turnierId = (int)$_POST['tournamentId'];
                $subTeamId = (int)$_POST['subTeam'];

                if ($_POST['submitText'] === 'Registrieren') {

                    $newSubTeam = new TeamParticipating();
                    $newSubTeam->tournament_id = $turnierId;
                    $newSubTeam->sub_team_id = $subTeamId;
                    $newSubTeam->insert();

                } else if ($_POST['submitText'] === 'Abmelden') {
                    $teamParticipating = TeamParticipating::findTeamParticipating($turnierId, $subTeamId);
                    if (NULL !== $teamParticipating) {
                        $teamParticipating->delete();
                    }
                } else if ($_POST['submitText'] === 'Check-In') {
                    $teamParticipating = TeamParticipating::findTeamParticipating($turnierId, $subTeamId);
                    if (NULL !== $teamParticipating) {
                        $teamParticipating->checked_in = true;
                        $teamParticipating->update();
                    }
                } else if ($_POST['submitText'] === 'Check-Out') {
                    $teamParticipating = TeamParticipating::findTeamParticipating($turnierId, $subTeamId);
                    if (NULL !== $teamParticipating) {
                        $teamParticipating->checked_in = null;
                        $teamParticipating->update();
                    }
                }

            }

        }

        $tournamentList = Tournament::getRLTournaments();

        return $this->render('rocketLeague/TournamentsOverview',
            [
                'tournamentList' => $tournamentList,
            ]
        );

    }

    public function actionRlTournamentsDetails()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('index');
            return $this->goHome();
        }

        $tournamentId = Yii::$app->request->get('id');

        $tournament = Tournament::getTournamentById($tournamentId);
        $ruleSet = $tournament->getRules();

        $participatingEntrys = $tournament->getParticipants()->all();

        return $this->render('rocketLeague/TournamentDetails',
            [
                'tournament' => $tournament,
                'ruleSet' => $ruleSet,
                'participatingEntrys' => $participatingEntrys
            ]
        );
    }

    public function actionRlTeamsOverview()
    {
        if (Yii::$app->user->isGuest) {
            // return $this->render('index');
            return $this->goHome();
        }

        // $subteams = SubTeam::getTeamsByGame(1);
        $teamHierarchy = SubTeam::getTeamHierarchyByGame(1);

        return $this->render('rocketLeague/TeamsOverview',
            [
                'teamHierarchy' => $teamHierarchy,
            ]
        );
    }
    /** End of Rocket League Area **/

    /**
     * Displays News.
     *
     * @return string
     */
    public function actionNews()
    {
        return $this->render('news');
    }

    /**
     * Displays Twitch.
     *
     * @return string
     */
    public function actionTwitch()
    {
        return $this->render('twitch');
    }

    /**
     * Displays Bracket.
     *
     * @return string
     */
    public function actionBracket()
    {
        return $this->render('bracket');
    }

    /**
     * Register new User action
     *
     * @return string
     * @throws \Throwable
     * @throws \yii\base\Exception
     * @throws \yii\db\StaleObjectException
     */
    public function actionRegister()
    {
        $model = new UserForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            $this->goHome();
        }

        $genderList = [];
        foreach (Gender::find()->all() as $gender) {
            $genderList[$gender->getGenderId()] = $gender->getName();
        }
        $languageList = [];
        foreach (Language::find()->all() as $language) {
            $languageList[$language->getLanguageId()] = $language->getName();
        }

        $nationalityList = [];
        foreach (Nationality::find()->all() as $nationality) {
            $nationalityList[$nationality->getId()] = $nationality->getName();
        }

        return $this->render('register',
            [
                "model" => $model,
                'genderList' => $genderList,
                'languageList' => $languageList,
                'nationalityList' => $nationalityList
            ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     *
     * public function actionContact()
     * {
     * $model = new ContactForm();
     * if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
     * Yii::$app->session->setFlash('contactFormSubmitted');
     *
     * return $this->refresh();
     * }
     * return $this->render('contact', [
     * 'model' => $model,
     * ]);
     * }*/

    /**
     * Displays about page.
     *
     * @return string
     *
     * public function actionAbout()
     * {
     * return $this->render('about');
     * }*/
}
