<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 29.03.2019
 * Time: 09:52
 */

namespace app\controllers;

use app\components\BaseController;
use Yii;


class CompanyController extends BaseController
{
    public function actionImprint()
    {
        return $this->render('imprint');
    }

    public function actionGtc()
    {
        return $this->render('gtc');
    }

    public function actionPrivacy()
    {
        return $this->render('privacy');
    }
}