<?php
/**
 * Created by PhpStorm.
 * User: Tobias
 * Date: 12.02.2018
 * Time: 12:52
 */

namespace app\modules\core\models;

use app\components\FormModel;
use Yii;
use yii\db\Expression;

class  UserForm extends FormModel
{
    public $password;
    public $passwordRepeat;
    public $username;
    public $email;
    public $birthday;
    public $genderId;
    public $languageId;
    public $preName;
    public $lastName;
    public $zipCode;
    public $city;
    public $street;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                ['username', 'preName', 'lastName', 'email', 'password', 'passwordRepeat', 'zipCode', 'city', 'street'],
                'required',
            ],
            [
                ['password', 'passwordRepeat'],
                'string',
                'min' => 6,
            ],
            [
                'birthday',
                'date'
            ],
            [
                'genderId',
                'exist',
                'targetClass' => Gender::className(),
                'targetAttribute' => 'gender_id'
            ],
            [
                'languageId',
                'exist',
                'targetClass' => Language::className(),
                'targetAttribute' => 'language_id'
            ],
            [
                'username',
                'unique',
                'targetClass' => User::className(),
                'targetAttribute' => 'username',
                'message' => "Benutzername schon vergeben"
            ],
            [
                'email',
                'email',
            ],
            [
                'passwordRepeat',
                'compare',
                'compareAttribute' => 'password'
            ],
            [
                ['password', 'passwordRepeat'],
                'validatePassword',
            ]
        ];
    }


    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [

        ];
    }

    /**
     * Validates if the given password contains at least 1 special char, at least 1 number and at least 6 chars
     *
     * @param $attribute
     * @param $params
     * @return bool
     */
    public function validatePassword($attribute, $params)
    {
        /*$validatePassword = preg_match('/^.*(?=.{6,})(?=.*[!$%&=?*-:;.,+~@_])(?=.*[0-9])(?=.*[a-z]).*$/', $this->password);

        if (!$validatePassword) {
            $this->addError($attribute, Yii::t('app', 'The password needs to have..'));
        }*/

        return true;
    }


    /**
     * Creates a new user, or updates an existing one.
     *
     * @return boolean true, if the user was saved successfully
     * @throws \Exception
     * @throws \Throwable
     * @throws \yii\base\Exception
     * @throws \yii\db\StaleObjectException
     */
    public function save()
    {

        $user = new User();

        $user->dt_created = new Expression("now");
        $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $user->username = $this->username;
        $user->birthday = date('Y-m-d', strtotime($this->birthday));
        $user->gender_id = $this->genderId;
        $user->language_id = $this->languageId;

        $user->save();

        $userId = Yii::$app->db->getLastInsertID();

        $userData = new User_Data();
        $userData->user_id = $userId;
        $userData->pre_name = $this->preName;
        $userData->last_name = $this->lastName;
        $userData->zip_code = $this->zipCode;
        $userData->city = $this->city;
        $userData->street = $this->street;

        return $userData->save();
    }
}