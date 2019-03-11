<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$user = array(
    'user_id' => $userId,
    'user_avatar' => $userId.'.jpg',
    'nationality_id' => '1',
);

$playerImage = 'images/userAvatar/'.$user['user_avatar'];
$playerNationality = 'images/nationality/'.$user['nationality_id'].'.png';

$memberDateTime = strtotime($creationDate);
$memberDate = date('d.m.y', $memberDateTime);

$memberBirthdayRaw = strtotime($model->birthday);
$tdate = time();

$age = 0;
while($tdate > $memberBirthdayRaw = strtotime('+1 year', $memberBirthdayRaw))
    ++$age;

$this->title = 'My Account';
?>
<div class="site-account">

    <div class="leftPanel fclear">
        <?= Html::img($playerImage, ['class' => 'avatar-logo']); ?>
    </div>

    <div class="midPanel fclear">
        <div class="fclear">
            <div class="header">
                <?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?>
                <div class="username">
                    <?= $model->username; ?>
                </div>
                <div class="userid">
                    id: <?= $userId; ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="fclear">
            <div class="userBody">
                <div class="accountLabel">Name</div><div class="context"><?= $model->preName; ?></div>
                <div class="accountLabel">Nick Name</div><div class="context"><?= $model->username; ?></div>
                <div class="accountLabel">Mitglied Seit</div><div class="context"><?= $memberDate; ?></div>
                <div class="accountLabel">Alter / Geschlecht</div><div class="context"><?= $age." / ".$genderList[$model->genderId]; ?></div>
                <div class="accountLabel">Nationalität</div><div class="context"><?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?><?= $languageList[$user['nationality_id']]; ?></div>
                <!-- /*Wohnsitz*/
                /*Main Team*/
                /*Website*/ -->
            </div>
        </div>
        <hr>
        <hr>
        <div class="fclear">
            <div class="teamHeader">My Team & Sub-Teams</div>
        </div>
        <hr>
        <div class="fclear">
            <div class="teamBody">
                <div class="mainTeam">Robotic Elite Clan</div>
            </div>
        </div>
    </div>

    <div class="rightPanel fclear">

    </div>
</div>
