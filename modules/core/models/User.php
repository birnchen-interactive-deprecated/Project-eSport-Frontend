<?php
/**
 * Created by PhpStorm.
 * User: Wenk
 * Date: 12.02.2018
 * Time: 12:39
 */

namespace app\modules\core\models;


use app\components\AbstractActiveRecord;
use Yii;
use yii\web\IdentityInterface;

/**
 * Class User
 * @package app\modules\core\models
 *
 * @property int $user_id
 * @property string $dt_created
 * @property string $dt_updated
 * @property int $user_created
 * @property int $user_updated
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property int $phone1
 * @property int $phone2
 * @property int $phone3
 * @property string $company
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $address4
 * @property boolean $is_active
 * @property boolean $is_new
 * @property string $password
 * @property string $password_reset_token
 * @property string $access_token
 * @property string $auth_key
 * @property string $username
 * @property int $is_deleted
 * @property int $is_password_change_required
 * @property string $bank_name
 * @property string $iban
 * @property string $bic
 * @property boolean $privacy_policy
 * @property string $outlook_id
 */
class User extends AbstractActiveRecord implements IdentityInterface
{

    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'user id'),
            'user_created' => Yii::t('app', 'user created'),
            'dt_created' => Yii::t('app', 'dt created'),
            'user_updated' => Yii::t('app', 'user updated'),
            'dt_updated' => Yii::t('app', 'dt updated'),
            'first_name' => Yii::t('app', 'first name'),
            'last_name' => Yii::t('app', 'last name'),
            'email' => Yii::t('app', 'email'),
            'phone1' => Yii::t('app', 'phone') . ' 1',
            'phone2' => Yii::t('app', 'phone') . ' 2',
            'phone3' => Yii::t('app', 'phone') . ' 3',
            'company' => Yii::t('app', 'company'),
            'address1' => Yii::t('app', 'address') . ' 1',
            'address2' => Yii::t('app', 'address') . ' 2',
            'address3' => Yii::t('app', 'address') . ' 3',
            'address4' => Yii::t('app', 'address') . ' 4',
            'is_active' => Yii::t('app', 'is active'),
            'is_new' => Yii::t('app', 'is new'),
            'username' => Yii::t('app', 'username'),
            'password' => Yii::t('app', 'password'),
            'is_deleted' => Yii::t('app', 'is_deleted'),
            'bankName' => Yii::t('app', 'bank name'),
            'iban' => Yii::t('app', 'iban'),
            'bic' => Yii::t('app', 'bic'),
            'privacy_policy' => "Datenschutzerklärung zugestimmt"
        ];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getDtCreated()
    {
        return $this->dt_created;
    }

    /**
     * @return string
     */
    public function getDtUpdated()
    {
        return $this->dt_updated;
    }

    /**
     * @return int
     */
    public function getUserCreated()
    {
        return $this->user_created;
    }

    /**
     * @return User
     */
    public function getCreator()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_created'])->one();
    }

    /**
     * @return int
     */
    public function getUserUpdated()
    {
        return $this->user_updated;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getPrettyName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * @return int
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * @return int
     */
    public function getPhone3()
    {
        return $this->phone3;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @return string
     */
    public function getAddress4()
    {
        return $this->address4;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->is_active;
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        return $this->is_new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getPasswordResetToken()
    {
        return $this->password_reset_token;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @return string
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return bool
     */
    public function isPrivacyPolicy()
    {
        return $this->privacy_policy;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
    }

    /**
     * @return int
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }

    public function getIsPasswordChangeRequired()
    {
        return $this->is_password_change_required;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }


    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * If this is a new database record, create a random auth key and access token
     * for this user before we store the record into the database.
     *
     * @param boolean $insert true, if this is a new record
     *
     * @return boolean true, if the record should be saved
     * @throws \yii\base\Exception
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->generateAuthKey();
                $this->generateAccessToken();
            }
            return true;
        }
        return false;
    }

    /**
     * Revokes all authentication assignments after a user has been deleted.
     */
    public function afterDelete()
    {
        parent::afterDelete();

        Yii::$app->getAuthManager()->revokeAll($this->getId());
    }

    /**
     * Validates the password password
     *
     * @param string $password password to validate
     * @return boolean true, if the provided password is valid for the current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * Generates and sets the password hash from the provided password.
     *
     * @param string $password the non-hashed password
     * @throws \yii\base\Exception
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates and sets a new password reset token.
     * @throws \yii\base\Exception
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Generates the "remember me" authentication key.
     * @throws \yii\base\Exception
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates the access token.
     * @throws \yii\base\Exception
     */
    public function generateAccessToken()
    {
        $this->access_token = Yii::$app->security->generateRandomString();
    }

    /**
     * Removes the password reset token.
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['user_id' => $id, 'is_active' => true]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token, 'is_active' => true]);
    }

    /**
     * Finds user by username.
     *
     * @param string $username the username
     * @return static|null the user, if a user with that username exists
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'is_active' => true]);
    }

    /**
     * Finds user by email address.
     *
     * @param string $email the email address
     * @return static|null the user, if a user with that email exists
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'is_active' => true]);
    }

    /**
     * Finds user by password reset token.
     * If the password reset token is not valid, this method returns null.
     *
     * @param string $token password reset token
     * @return static|null the user, if a user with that password reset token exists
     */
    public static function findByPasswordResetToken($token)
    {
        // validate the password reset token
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'is_active' => true,
        ]);
    }

    /**
     * Finds out if the password reset token is valid.
     * A token has a limited lifetime, that is determined by the timestamp prefix. That timestamp
     * will be validated.
     *
     * @param string $token password reset token
     * @return boolean true, if the password reset token has not expired yet
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int)substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * Returns the string representation of this user.
     *
     * @return string
     */
    function __toString()
    {
        return $this->getFullName();
    }


}