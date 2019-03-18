<?php
/**
 * Created by PhpStorm.
 * User: Wenk
 * Date: 12.02.2018
 * Time: 17:09
 */

namespace app\modules\core\controllers;

use app\components\BaseController;
use app\modules\core\models\User;
use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Response;

/**
 * Class UserController
 * @package app\modules\core\controllers
 */
class UserController extends BaseController
{
    /**
     * This action handles the ajax call from the auto complete drop down list.
     * The first 20 results that match the given query will be returned.
     *
     * @param string $q the query string
     * @param integer $id the id of a given user
     *
     * @param null $oId
     * @return array the data
     */
    public function actionQuery($q = null, $id = null, $oId = null)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $out = ['results' => ['id' => '', 'text' => '']];
        $userQuery = User::find();
        if ($oId) {
            $userQuery->innerJoin('user_organisation', "`user`.`user_id` = `user_organisation`.`user_id` AND `user_organisation`.`organisation_id` = $oId");
        } else {
            return $out;
        }

        if (!is_null($q)) {
            $userQuery->where(['like', 'first_name', $q])
                ->orWhere(['like', 'last_name', $q])
                ->orWhere(['=', 'user.user_id', $q])
                ->limit(20)
                ->orderBy('first_name');
            $users = $userQuery->all();

            $out['results'] = [];
            /** @var User $user */
            foreach ($users as $user) {
                $out['results'][] = ['id' => $user->getId(), 'text' => $user->__toString()];
            }
        } else {
            $users = $userQuery->all();
            $out['results'] = [];
            /** @var User $user */
            foreach ($users as $user) {
                $out['results'][] = ['id' => $user->getId(), 'text' => $user->__toString()];
            }
        }


        if ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => User::findOne($id)->__toString()];
        }
        return $out;
    }

    /**
     * @return string
     */
    private static function generatePassword()
    {
        return str_shuffle(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4) . substr(str_shuffle('!$%&=?*-:;.,+~@_'), 0, 1) . substr(str_shuffle('123456789'), 0, 1));
    }

    public static function resetPassword($id)
    {
        /** @var User $user */
        $user = User::find()->where(['user_id' => $id])->one();
        if (!$user) {
            throw new BadRequestHttpException("Invalid user id $id");
        }

        $password = self::generatePassword();

        $user->setPassword($password);
        $user->is_password_change_required = 1;

        if ($user->save()) {
            Yii::$app->mailer->compose('passwordChange', ['user' => $user, 'password' => $password])
                ->setFrom("noreply@project-esport.gg")
                ->setTo("wenk.sebastian@googlemail.com")
                ->setSubject(Yii::t('app', 'Your Project-eSport.gg account password was reset'))
                ->send();
        }
    }

    /** Resets the password
     * @param $id
     * @return \yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($id)
    {
        self::resetPassword($id);

        return self::redirect('index');
    }
}