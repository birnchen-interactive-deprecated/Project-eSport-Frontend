<?php

namespace app\modules\account\controllers;

use app\components\BaseController;
use app\components\SessionUtil;
use app\modules\core\models\User;
use app\modules\upload\models\EaPeriod;
use app\modules\upload\models\Month;
use app\modules\upload\models\ReportFile;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;

/**
 * Class SiteController
 *
 * @package app\modules\account\controllers
 */
class SiteController extends BaseController
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
     * Displays the user dash boards.
     *
     * @return Response|string
     * @throws \Exception
     * @throws \Throwable
     */
    public function actionIndex()
    {
        return $this->render('/site/index');
        //return $this->render('dashboard');
    }
}
