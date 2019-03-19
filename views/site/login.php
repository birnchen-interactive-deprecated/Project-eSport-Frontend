<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';

$this->registerMetaTag([
    'name' => 'og:title',
    'content' => $model->username.'Login',
]);
$this->registerMetaTag([
    'name' => 'og:description',
    'content' => 'you must be logged in to see something',
]);
$this->registerMetaTag([
    'name' => 'og:url',
    'content' => 'https://project-esport.gg/site/login',
]);
$this->registerMetaTag([
    'name' => 'og:type',
    'content' => 'website',
]);
$this->registerMetaTag([
    'name' => 'og:image',
    'content' => '/images/Twitter_Logo_Blue.png',
]);

?>
<div class="site-login">
    <h1 class="col-lg-offset-1"><?= Html::encode($this->title) ?></h1>


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ]) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?= Html::a("Registrieren", ['register'], ['class' => 'btn fake-submit']); ?>
        </div>
        <?= Html::a("Passwort vergessen?", ["password-reset"]); ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
