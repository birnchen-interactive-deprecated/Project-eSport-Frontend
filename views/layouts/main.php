<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);

$visible = (Yii::$app->user->isGuest) ? false : true;

$twitterImg = Html::img('images/Twitter_Logo_Blue.png', ['height' => '50px']);
$twitterLink = Html::a($twitterImg, 'https://twitter.com/esport_project', ['target' => '_blank']);

$discordImg = Html::img('images/Discord-Logo-White.png', ['height' => '50px', 'style' => 'padding: 5px 0; ']);
$discordLink = Html::a($discordImg, 'https://discord.gg/f6NXNFy', ['target' => '_blank']);

$containerClass = '';
switch ($_REQUEST['r']) {
    case 'site/bracket':
        $containerClass = 'bracket';
        break;
}

$navigation = array(
    array('label' => 'Home', 'visible' => $visible, 'url' => ['/site/index']),
);
if (Yii::$app->user->isGuest) {
    $navigation[] = array('label' => 'Login', 'url' => ['/site/login']);
} else {
    $navigation[] = array('label' => 'Teams', 'visible' => $visible, 'items' => array(
        array('label' => 'Rocket League', 'url' => ['/site/rl-teams-overview']),
    ));
    $navigation[] = array('label' => 'Turniere', 'visible' => $visible, 'items' => array(
        array('label' => 'Rocket League', 'url' => ['/site/rl-tournaments']),
    ));
    $navigation[] = array('label' => '' . Yii::$app->user->identity->username . '', 'visible' => $visible, 'items' => array(
        array('label' => 'Account', 'url' => ['/site/my-account']),
        array('label' => 'My Teams', 'url' => ['/site/my-teams']),
        array('label' => 'My Tournaments', 'url' => ['/site/my-tournaments']),
        array('label' => 'Logout', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']),
    ));
}

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
        'items' => $navigation,
    ]);
    NavBar::end();
    ?>

    <div class="container <?= $containerClass; ?>">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-6 col-lg-offset-1 make-center" style="padding: 15px 0 0;">&copy; Birnchen Interactive 2016
            - <?= date('Y') ?></div>
        <div class="col-lg-2 col-lg-offset-1">
            <span><?= $twitterLink; ?></span>
            <span><?= $discordLink; ?></span>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
