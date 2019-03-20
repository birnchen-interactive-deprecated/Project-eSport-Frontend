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
    'content' => '@BirnchenStudios',
]);
$this->registerMetaTag([
    'property' => 'twitter:account_id',
    'content' => '984585634072399872'
]);
$this->registerMetaTag([
    'name' => 'twitter:title',
    'content' => $model->username.'\'s Player profile',
]);
$this->registerMetaTag([
    'name' => 'twitter:description',
    'content' => $model->username.' ist ein Spieler aus '.$nationality->getName().'.',
]); //less then 200 characters
$this->registerMetaTag([
    'name' => 'twitter:creator',
    'content' => '@esport_project',
]);
$this->registerMetaTag([
    'name' => 'twitter:image:src',
    'content' => 'https://project-esport.gg/images/UserAvatar/'.$model->user_id.'.png',
]);
$this->registerMetaTag([
    'name' => 'twitter:image:alt',
    'content' => 'no profile pic availabel',
]);

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

    <div class="leftPanel clearfix">
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

    <div class="midPanel clearfix">
        <div class="clearfix">
            <div class="header">
                <?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?>
                <div class="username">
                    <?= $model->username; ?>
                </div>
                <div class="userid">
                    id: <?= $model->user_id; ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="clearfix">
            <div class="userBody">
                <div class="accountLabel">Name</div>
                <div class="context"><?= $model->pre_name; ?></div>
                <div class="accountLabel">Nick Name</div>
                <div class="context"><?= $model->username; ?></div>
                <div class="accountLabel">Mitglied Seit</div>
                <div class="context"><?= $memberDate; ?></div>
                <div class="accountLabel">Alter / Geschlecht</div>
                <div class="context"><?= $age . " / " . $gender->getName(); ?></div>
                <div class="accountLabel">Nationalität</div>
                <div class="context"><?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?><?= (NULL === $nationality) ? '' : $nationality->getName(); ?></div>
                <div class="context"><?= $model->city; ?></div>
                <!-- /*Main Team*/
                /*Website*/ -->
            </div>
        </div>
        <hr>
        <hr>
        <div class="clearfix">
            <div class="teamHeader">My Team & Sub-Teams</div>
        </div>
        <hr>
        <div class="clearfix">
            <div class="teamBody">
                <?php foreach ($mainTeams as $key => $mainTeam): ?>
                    <div class="mainTeam"><?= "Main Team: " . $mainTeam['team']->getName(); ?></div>
                    <?php if ($mainTeam['owner']): ?>
                        <div class="teamPosition">(owner)</div>
                    <?php else : ?>
                        <div class="teamPosition">(member)</div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php foreach ($subTeams as $key => $subTeam): ?>
                    <div class="mainTeam"><?= "Sub teams: " . $subTeam['team']->getName() . " (" . $subTeam['team']->getTournamentMode()->one()->getName() . ")"; ?></div>
                    <?php if ($subTeam['owner']): ?>
                        <div class="teamPosition">(Captain)</div>
                    <?php elseif (!$subTeam['isSub']): ?>
                        <div class="teamPosition">(Player)</div>
                    <?php else : ?>
                        <div class="teamPosition">(Substitute)</div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="rightPanel clearfix">

    </div>
</div>
