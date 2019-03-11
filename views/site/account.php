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

    <div class="rightPanel fclear">
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
                <div class="name-label">Name</div><div class="nickName"><?= $model->preName; ?></div>
                <div class="nickName-label">Nick Name</div><div class="nickName"><?= $model->username; ?></div>
                <div class="nickName-label">Mitglied Seit</div><div class="nickName"><?= $memberDate; ?></div>
                <div class="nickName-label">Alter / Geschlecht</div><div class="nickName"><?= $age." / ".$genderList[$model->genderId]; ?></div>
                /*Nationalität*/
                /*Wohnsitz*/
                /*Main Team*/
                /*Website*/
            </div>
        </div>
    </div>
</div>
