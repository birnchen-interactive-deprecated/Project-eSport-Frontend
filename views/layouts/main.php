<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => "Project eSport Beta",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                ['label' => '1v1 Teams', 'url' => ['/site/index']],
                ['label' => '2v2 Teams', 'url' => ['/site/account']],
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

        <?php if(!Yii::$app->user->isGuest):?>
            <div class="welcomer">
                Willkommen zum ersten Spieltag der zweiten Season des Gerta Cups. <br>
                Aufgrund technischer Probleme wird der Checkin über unseren <br>
                <a class="dclink" href="https://discord.gg/f6NXNFy">Discord</a> <br>
                ablaufen. Alle Registrierten User mögen dort Bitte um 18:00 eintreffen <br>
                und im Warteraum warten. <br>
                Checkin ist von 18:00 - 18:15, wer nicht da ist in dieser Zeit wird nicht eingecheckt. <br>
            </div>
            <iframe class="regeln" src="https://docs.google.com/document/d/e/2PACX-1vR66PMmQPCHbttNuV5IuRwPj0wPzrxe03-xBIyu1r-gWfIuBKnZyQ2ELYYEGKZQ4OFaunfwJWQtNOW9/pub?embedded=true"></iframe>
        <?php endif; ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="make-center">&copy; Birnchen Interactive 2016 - <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
