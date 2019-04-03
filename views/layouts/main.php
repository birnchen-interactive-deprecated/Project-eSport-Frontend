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

$twitterImg = Html::img('../images/socialMedia/Twitter_Logo_Blue.png', ['height' => '49px', 'alt'=> 'twitter.png', 'aria-label' => 'twitter.png']);
$twitterLink = Html::a($twitterImg, 'https://twitter.com/esport_project', ['target' => '_blank', 'rel' =>'noopener', 'aria-label' => 'Follow us on twitter', 'label' => 'twitter']);

$discordImg = Html::img('../images/socialMedia/Discord-Logo-White.png', ['height' => '49px', 'alt'=> 'discord.png', 'aria-label' => 'discord.png', 'style' => 'padding: 5px 0; ']);
$discordLink = Html::a($discordImg, 'https://discord.gg/f6NXNFy', ['target' => '_blank', 'rel' =>'noopener', 'aria-label' => 'Join our Discord Server']);

$containerClass = '';
if (array_key_exists("r", $_REQUEST) && $_REQUEST['r'] == "site/bracket") {
    $containerClass = 'bracket';
}

$navigation = array(
    array('label' => 'Home', 'url' => ['/site/index'], ['aria-label' => 'Home Button']),
    array('label' => 'Teams', 'items' => array(
        array('label' => 'Rocket League', 'url' => ['/rocketLeague/teams-overview']),
    )),
    array('label' => 'Turniere', 'items' => array(
        array('label' => 'Rocket League', 'url' => ['/rocket-League/rl-tournaments']),
    )),
);
if (Yii::$app->user->isGuest) {
    $navigation[] = array('label' => 'Login', 'url' => ['/site/login']);
} else {
    $navigation[] = array('label' => '' . Yii::$app->user->identity->username . '', 'visible' => $visible, 'items' => array(
        array('label' => 'Account', 'url' => ['/user/details', 'id' => Yii::$app->user->identity->getId()]),
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
        <div class="col-sm-3 col-lg-3 left_side">
            <span><?= Html::a('Impressum', ['/company/imprint']); ?></span>
            <span><?= Html::a('AGB', ['/company/gtc']); ?></span>
            <span><?= Html::a('Datenschutz', ['/company/privacy']); ?></span>
        </div>
        <div class="col-sm-6 col-lg-6 middle">Project-eSport ist eine Marke der Birnchen Interactive. &copy; 2016 - <?= date('Y'); ?></div>
        <div class="col-sm-3 col-lg-3 right_side">
            <span><?= $twitterLink; ?></span>
            <span><?= $discordLink; ?></span>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
