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
    /**
     * Impressum
     *
     * @return string
     */
    public function actionImprint()
    {
        return $this->render('imprint');
    }

    /**
     * AGB
     *
     * @return string
     */
    public function actionGtc()
    {
        return $this->render('gtc');
    }

    /**
     * Datenschutz
     *
     * @return string
     */
    public function actionPrivacy()
    {
        return $this->render('privacy');
    }

    /**
     * Aktuell ausgeschriebene Jobs
     *
     * @return string
     */
    public function actionJobs()
    {
        return $this->render('gtc');
    }
}