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
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
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
            return $this->render('index');
            //return $this->goHome();
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



    //public function actionTeamDetails($id = null, $isSub = false)
    //{
    //    $teamDetails = (!$isSub) ? MainTeam::findOne(['team_id' => $id]) : SubTeam::findOne(['sub_team_id' => $id]);
    //
    //    if($isSub)
    //    {
    //        return $this->render('teams/teamDetails',
    //            [
    //                'teamDetails' => $teamDetails,
    //            ]);
    //    }
    //    else {
    //        return $this->render('teams/teamDetails',
    //            [
    //                'teamDetails' => $teamDetails,
    //            ]);
    //    }
    //}

    /**
     * Displays User Tournaments.
     *
     * @return string
     */
    public function actionMyTournaments()
    {
        //if (Yii::$app->user->isGuest) {
        //    // return $this->render('index');
        //    return $this->goHome();
        //}

        return $this->render('myTournaments');
    }

    /**
     * Displays User teams.
     *
     * @return string
     */
    public function actionMyTeams()
    {
        //if (Yii::$app->user->isGuest) {
        //    // return $this->render('index');
        //    return $this->goHome();
        //}

        return $this->render('myTeams');
    }

    /** Rocket League Area **/

    public function actionRlTournamentDetails()
    {
        //if (Yii::$app->user->isGuest) {
        //    // return $this->render('index');
        //    return $this->goHome();
        //}

        $tournamentId = Yii::$app->request->get('id');

        $tournament = Tournament::getTournamentById($tournamentId);
        $ruleSet = $tournament->getRules();

        $participatingEntrys = $tournament->getParticipants()->all();

        return $this->render('rocketLeague/tournamentDetails',
            [
                'tournament' => $tournament,
                'ruleSet' => $ruleSet,
                'participatingEntrys' => $participatingEntrys
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
