<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$user = array(
    'user_id' => $userId,
    'user_avatar' => $userId.'jpg',
    'nationality_id' => '1',
);

$playerImage = 'images/nationality/'.$user['user_avatar'];
$playerNationality = 'images/nationality/'.$user['nationality_id'].'.png';

$this->title = 'My Account';
?>
<div class="site-account">

    <div class="leftPanel fclear">
        <?= Html::img($playerNationality, ['class' => 'avatar-logo']); ?>
    </div>

    <div class="rightPanel fclear">
        <div class="header"> <?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?> </div>
    </div>
</div>
