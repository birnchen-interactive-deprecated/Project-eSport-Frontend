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

Yii::$app->metaClass->writeMetaUser($this, $model, $nationality);

$playerImage = '/images/userAvatar/' . $model->user_id . '.png';
if (!is_file($_SERVER['DOCUMENT_ROOT'] . $playerImage)) {
    $playerImage = '/images/userAvatar/default.png';
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