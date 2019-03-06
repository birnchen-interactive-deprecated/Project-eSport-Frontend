<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$test = Yii::$app->user->identity->user_id;

$user = array(
    'user_id' => $test,
    'user_avatar' => $test.'.jpg',
    'nationality_id' => '1',
);

$playerImage = 'images/nationality/'.$user['user_avatar'];
$playerNationality = 'images/nationality/'.$user['nationality_id'].'.png';

$this->title = 'My Account';
?>
<div class="site-account">

    <div class="leftPanel fclear">
        <?= Html::img($playerImage, ['class' => 'avatar-logo']); ?>
    </div>

    <div class="rightPanel fclear">
        <div class="header"> <?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?> </div>
    </div>
</div>
