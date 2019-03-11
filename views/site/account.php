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
                <div class="nickName-label">Mitglied Seit</div><div class="nickName"><?= $creationDate; ?></div>
                /*Mitglied seit*/
                /*Alter / Geschlecht*/
                /*Nationalität*/
                /*Wohnsitz*/
                /*Main Team*/
                /*Website*/
            </div>
        </div>
    </div>
</div>
