<?php

/* @var $this yii\web\View *
 * @var $model app\modules\core\models\User
 * @var $isMySelfe bool
 * @var $gender app\modules\core\models\Gender
 * @var $language app\modules\core\models\Language
 * @var $nationality app\modules\core\models\Nationality
 * @var $mainTeams array
 * @var $subTeams array
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = $model->username.'\'s Player profile';

$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);

/* standart meta tags */
$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
]);

/* Schema.org markup for Google+ */
$this->registerMetaTag([
    'itemprop' => 'name',
    'content' => $model->username.'\'s Player profile',
]);
$this->registerMetaTag([
    'itemprop' => 'description',
    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
]);
$this->registerMetaTag([
    'itemprop' => 'image',
    'content' => 'https://project-esport.gg/images/UserAvatar/'.$model->user_id.'.png',
]);

/* Twitter Card Data */
$this->registerMetaTag([
    'name' => 'twitter:card',
    'content' => 'summary',
]);
//$this->registerMetaTag([
//    'name' => 'twitter:card',
//    'content' => 'summary_large_image',
//]);
$this->registerMetaTag([
    'name' => 'twitter:site',
    'content' => '@esport_project',
]); // twitter:site
$this->registerMetaTag([
    'property' => 'twitter:account_id',
    'content' => '1063431775995727872'
]); // twitter:account_id
$this->registerMetaTag([
    'name' => 'twitter:title',
    'content' => $model->username.'\'s Player profile',
]); // twitter:title
$this->registerMetaTag([
    'name' => 'twitter:description',
    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
]); // twitter:description - ss then 200 characters
$this->registerMetaTag([
    'name' => 'twitter:creator',
    'content' => '@BirnchenStudios',
]); // twitter:creator - author
$this->registerMetaTag([
    'name' => 'twitter:image:src',
    'content' => 'https://project-esport.gg/images/UserAvatar/'.$model->user_id.'.png',
]); // twitter:image:src
$this->registerMetaTag([
    'name' => 'twitter:image:alt',
    'content' => 'no profile pic availabel',
]); // twitter:image:alt

/* Open Graph Data (and facebook) */
$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $model->username.'\'s Player profile',
]);
$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'website'
]);
$this->registerMetaTag([
    'property' => 'og:url',
    'content' => 'https://project-esport.gg/site/user-details?id='.$model->user_id,
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => 'https://project-esport.gg/images/UserAvatar/'.$model->user_id.'.png',
]);
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
]);
$this->registerMetaTag([
    'property' => 'og:site_name',
    'content' => 'Player\'s profile',
]);

$playerImage = '/images/UserAvatar/' . $model->user_id . '.png';
if (!is_file($_SERVER['DOCUMENT_ROOT'] . $playerImage)) {
    $playerImage = '/images/default.png';
}

$playerNationality = '/images/nationality/' . $model->nationality_id . '.png';

$memberDateTime = new DateTime($model->dt_created);
$memberDate = $memberDateTime->format('d.m.y');

$memberBirthdayRaw = new DateTime($model->birthday);
$now = new DateTime();

$ageDiff = $memberBirthdayRaw->diff($now);
$age = $ageDiff->y;

?>
<div class="site-account">

    <div class="col-lg-3 avatarPanel">
        <?= Html::img($playerImage, ['class' => 'avatar-logo']); ?>
        <?php if($isMySelfe) : ?>
        <?php $form = ActiveForm::begin([
            'id' => 'profile-pic-form',
            // 'layout' => 'horizontal',
            'options' => ['enctype' => 'multipart/form-data'],
            // 'fieldConfig' => [
            //     'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            //     'labelOptions' => ['class' => 'col-lg-2 control-label'],
            // ],
        ]); ?>
        <?= Html::fileInput('profilePic', null, ['accept' => 'image/x-png']); ?>
        <?= Html::submitInput('Hochladen'); ?>
        <?php ActiveForm::end(); ?>
        <?php endif; ?>
    </div>

    <div class="col-lg-7 playerPanel">

        <div class="header">
            <?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?>
            <span class="username"><?= $model->username; ?></span>
            <span class="userid">id: <?= $model->user_id; ?></span>
        </div>

        <div class="userBody">
            <div class="entry clearfix">
                <div class="col-xs-5 col-sm-3 col-lg-3">Name</div>
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $model->pre_name; ?></div>
            </div>
            <div class="entry clearfix">
                <div class="col-xs-5 col-sm-3 col-lg-3">Nick Name</div>
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $model->username; ?></div>
            </div>
            <div class="entry clearfix">
                <div class="col-xs-5 col-sm-3 col-lg-3">Mitglied Seit</div>
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $memberDate; ?></div>
            </div>
            <div class="entry clearfix">
                <div class="col-xs-5 col-sm-3 col-lg-3">Alter / Geschlecht</div>
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $age . " / " . $gender->getName(); ?></div>
            </div>
            <div class="entry clearfix">
                <div class="col-xs-5 col-sm-3 col-lg-3">Nationalität</div>
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?><?= (NULL === $nationality) ? '' : $nationality->getName(); ?></div>
            </div>
            <div class="entry clearfix">
                <div class="col-xs-5 col-sm-3 col-lg-3">Ort</div>
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $model->city; ?></div>
            </div>
        </div>

        <div class="clearfix">
            <div class="col-lg-12 teamHeader">My Team & Sub-Teams</div>
        </div>

        <div class="teamBody clearfix">
            <div class="col-xs-12 col-sm-6">
                <div class="mainTeam">Main Team:</div>
                <?php foreach ($mainTeams as $key => $mainTeam): ?>
                    <div class="teamEntry clearfix">
                        <div class="col-lg-12"><?= $mainTeam['team']->getName(); ?> (<?= ($mainTeam['owner']) ? 'owner' : 'member'; ?>)</div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="mainTeam">Sub Teams:</div>
                <?php foreach ($subTeams as $key => $subTeam): ?>
                    <div class="teamEntry clearfix">
                        <div class="col-lg-12"><?= $subTeam['team']->getName() . " (" . $subTeam['team']->getTournamentMode()->one()->getName() . ")"; ?> (<?= ($subTeam['owner']) ? 'Captain' : (($subTeam['isSub']) ? 'Substitute' : 'Player'); ?>)</div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <div class="col-lg-2">

    </div>
</div>
