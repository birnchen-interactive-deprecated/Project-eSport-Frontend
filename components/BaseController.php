<?php

namespace app\components;

use app\modules\tariff\models\Parameter;
use Yii;
use yii\web\Controller;

class BaseController extends Controller
{

    /**
     * Checks if a password change is required. If yes, the user will get redirected to the password change site until he changes his password.
     *
     * @param \yii\base\Action $action
     * @return bool|\yii\web\Response
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }


        return true;
    }
}