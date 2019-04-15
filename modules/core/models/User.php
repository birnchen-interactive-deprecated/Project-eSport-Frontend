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
use yii\db\ActiveQuery;
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
 * @property int $nationality_id
 * @property string $pre_name
 * @property string $last_name
 * @property string $zip_code
 * @property string $city
 * @property string $street
 * @property string $email
 * @property bool $is_password_change_required
 * @property string $access_token
 * @property string $auth_key
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
            'gender_id' => Yii::t('app', 'gender'),
            'nationality_id' => Yii::t('app', 'nationality'),
            'pre_name' => Yii::t('app', 'pre name'),
            'last_name' => Yii::t('app', 'last name'),
            'zip_code' => Yii::t('app', 'zip code'),
            'city' => Yii::t('app', 'city'),
            'street' => Yii::t('app', 'street'),
            'email' => Yii::t('app', 'email')
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
    public function getPreName()
    {
        return $this->pre_name;
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
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
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
     * @return ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(Gender::className(), ['gender_id' => 'gender_id']);
    }

    /**
     * @return int
     */
    public function getNationalityId()
    {
        return $this->nationality_id;
    }

    /**
     * @return ActiveQuery
     */
    public function getNationality()
    {
        return $this->hasOne(Nationality::className(), ['nationality_id' => 'nationality_id']);
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * @return bool
     */
    public function isPasswordChangeRequired()
    {
        return $this->is_password_change_required;
    }

    /**
     * @return ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['language_id' => 'language_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getOwnedMainTeams()
    {
        return $this->hasMany(MainTeam::className(), ['owner_id' => 'user_id']);
    }

    /**
     * @return ActiveQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function getMemberMainTeams()
    {
        return $this->hasMany(MainTeam::className(), ['team_id' => 'team_id'])
            ->viaTable('team_member', ['user_id' => 'user_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getOwnedSubTeams()
    {
        return $this->hasMany(SubTeam::className(), ['team_captain_id' => 'user_id']);
    }

    /**
     * @return ActiveQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function getMemberSubTeams()
    {
        return $this->hasMany(SubTeam::className(), ['sub_team_id' => 'sub_team_id'])
            ->viaTable('sub_team_member', ['user_id' => 'user_id']);
    }

    /**
     * @return array
     * @throws \yii\base\InvalidConfigException
     */
    public function getAllSubTeamsWithMembers()
    {
        $retArr = array();
        /** @var SubTeam[] $subTeams */
        $subTeams = $this->getMemberSubTeams()->all();
        foreach ($subTeams as $subTeam) {
            $retArr[] = array(
                'owner' => ($subTeam->getTeamCaptainId() == $this->getId()),
                //TODO: isUserSubstitute testen
                'isSub' => $subTeam->isUserSubstitute($this->getId()),
                'team' => $subTeam,
                'subTeamId' => $subTeam->getId(),
            );
        }

        $captainTeams = $this->getOwnedMainTeams()->all();
        /** @var SubTeam $captainTeam */
        foreach ($captainTeams as $key => $captainTeam) {
            if (array_search($captainTeam->getId(), array_column($retArr, 'subTeamId'))) {
                $retArr[] = array(
                    'owner' => true,
                    'isSub' => false,
                    'team' => $captainTeam,
                    'subTeamId' => $captainTeam->getId(),
                );
            }
        }

        return $retArr;
    }

    /**
     * @param $tournamentId
     * @return string
     */
    public function getCheckInStatus($tournamentId)
    {
        /** @var PlayerParticipating $isParticipating */
        $isParticipating = $this->getPlayerParticipating()->where(['tournament_id' => $tournamentId])->one();
        return $isParticipating->getCheckedIn() != null;
    }


    /**
     * @param $tournamentId
     * @return string
     */
    public function getDisqualifiedStatus($tournamentId)
    {
        /** @var PlayerParticipating $isParticipating */
        $isParticipating = $this->getPlayerParticipating()->where(['tournament_id' => $tournamentId])->one();
        return $isParticipating->getDisqualified() != null;
    }

    public function getPlayerParticipating()
    {
        return $this->hasMany(PlayerParticipating::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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

    public function setProfilePic($profilePic)
    {
        $docRoot = $_SERVER['DOCUMENT_ROOT'];
        $filePathPng = $docRoot . '/images/userAvatar/' . $this->user_id . '.png';
        $filePathWebp = $docRoot . '/images/userAvatar/' . $this->user_id . '.webp';

        $profilePic->moveTo($filePathPng);

        // Buggy mit 7.0.33, sollte ab 7.1.x aufwärts laufen, wenn "WebP Support === true"
        // $im = imagecreatefrompng($filePathPng);
        // imagewebp($im, $filePathWebp);

        // Workaround
        $cmd = escapeshellcmd('cwebp ' . $filePathPng . ' -o ' . $filePathWebp);
        shell_exec($cmd);
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
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
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
        return $this->auth_key;
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
        return $this->getAuthKey() === $authKey;
    }
}