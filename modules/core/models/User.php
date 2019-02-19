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
 * @property string $password
 * @property string $username
 * @property string $birthday
 * @property int $gender_id
 * @property int $language_id
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
            'dt_created' => Yii::t('app', 'dt created'),
            'dt_updated' => Yii::t('app', 'dt updated'),
            'username' => Yii::t('app', 'username'),
            'password' => Yii::t('app', 'password'),
            'birthday' => Yii::t('app', 'birthday'),
            'language_id' => Yii::t('app', 'language'),
            'gender_id' => Yii::t('app', 'gender')
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
     * @return \yii\db\ActiveQuery
     */
    public function getUserData()
    {
        return $this->hasOne(User_Data::className(), ['user_id' => 'user_id']);
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
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return int
     */
    public function getGenderId()
    {
        return $this->gender_id;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(Gender::className(), ['gender_id' => 'gender_id']);
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
        return $this->language_id;
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
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['user_id' => $id]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username.
     *
     * @param string $username the username
     * @return static|null the user, if a user with that username exists
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds user by email address.
     *
     * @param string $email the email address
     * @return static|null the user, if a user with that email exists
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
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
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * The key should be unique for each individual user, and should be persistent
     * so that it can be used to check the validity of the user identity.
     *
     * The space of such keys should be big enough to defeat potential identity attacks.
     *
     * This is required if [[User::enableAutoLogin]] is enabled. The returned key will be stored on the
     * client side as a cookie and will be used to authenticate user even if PHP session has been expired.
     *
     * Make sure to invalidate earlier issued authKeys when you implement force user logout, password change and
     * other scenarios, that require forceful access revocation for old sessions.
     *
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}