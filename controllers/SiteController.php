<?php

namespace app\controllers;

use app\models\LoginForm;
use app\modules\core\models\Gender;
use app\modules\core\models\Language;
use app\modules\core\models\Nationality;
use app\modules\core\models\UserForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;


class SiteController extends Controller
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
    public function actionMy_account()
    {
        $model = new UserForm();

        if (Yii::$app->user->isGuest) {
            return $this->render('index');
            //return $this->goHome();
        }

        $userId = Yii::$app->user->identity->user_id;
        $model->username = Yii::$app->user->identity->username;
        $model->preName = empty(Yii::$app->user->identity->preName) ? "--" : Yii::$app->user->identity->preName;

        $model->birthday = Yii::$app->user->identity->birthday;
        $model->genderId = Yii::$app->user->identity->genderId;
        $model->languageId = Yii::$app->user->identity->genderId;
        $model->nationalityId = Yii::$app->user->identity->nationalityId;

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

        return $this->render('myAccount',
            [
                "model" => $model,
                'userId' => $userId,
                'genderList' => $genderList,
                'languageList' => $languageList,
                'nationalityList' => $nationalityList,
                'creationDate' => Yii::$app->user->identity->dt_created
            ]);
    }

    /**
     * Displays User Tournaments.
     *
     * @return string
     */
    public function actionMy_tournaments()
    {
        return $this->render('myTournaments');
    }

    /**
     * Displays User Teams.
     *
     * @return string
     */
    public function actionMy_teams()
    {
        return $this->render('myTeams');
    }

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

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }*/

    /**
     * Displays about page.
     *
     * @return string

    public function actionAbout()
    {
        return $this->render('about');
    }*/
}
