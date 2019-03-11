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
            ['label' => 'Home', 'visible' => $visible, 'url' => ['/site/index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                ['label' => ''. Yii::$app->user->identity->username .'', 'visible' => $visible, 'items' => [
                    ['label' => 'My Account', 'url' => ['/site/myAccount']],
                    ['label' => 'My Teams', 'url' => ['/site/myteams']],
                    ['label' => 'My Tournaments', 'url' => ['/site/mytournaments']],
                    ['label' => 'Logout', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']],
               ]]
            )
        ],
    ]);



//       'items' => [
//               ['label' => 'Welcome', 'visible' => $visible, 'url' => ['/site/index']],
//    //           ['label' => ''. Yii::$app->user->identity->username .'', 'visible' => $visible, 'items' => [
//                   ['label' => 'My Account', 'url' => ['/site/account']],
//                   ['label' => 'My Teams', 'url' => ['/site/news']],
//                   ['label' => 'My Tournaments', 'url' => ['/site/news']],
//               ]],
//               ['label' => 'Cups', 'visible' => $visible, 'items' => [
//                   ['label' => '1v1 Cup', 'url' => ['/site/news']],
//                   ['label' => '2v2 Cup', 'url' => ['/site/account']],
//                   ['label' => '3v3 Cup', 'url' => ['/site/tournament']],
//               ]],
//               ['label' => 'Twitch.tv', 'url' => ['/site/twitch']],
//               ['label' => 'Bracket', 'url' => ['/site/bracket']],
//           Yii::$app->user->isGuest ? (
//               ['label' => 'Login', 'url' => ['/site/login']]
//           ) : (
//               '<li>'
//               . Html::beginForm(['/site/logout'], 'post')
//               . Html::submitButton(
//                   'Logout (' . Yii::$app->user->identity->username . ')',
//                   ['class' => 'btn btn-link logout']
//               )
//               . Html::endForm()
//               . '</li>'
//           )
//       ],
//   ]);
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
        <div class="col-lg-6 col-lg-offset-1 make-center" style="padding: 15px 0 0;">&copy; Birnchen Interactive 2016 - <?= date('Y') ?></div>
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
