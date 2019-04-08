<?php

/* @var $this yii\web\View *
 * @var $model app\modules\core\models\User
 * @var $userInfo array
 * @var $mainTeams array
 * @var $subTeams array
 */

use app\assets\UserDetails;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

\app\assets\UserDetails::register(($this));

/* Browser Title */
$this->title = $model->username.'\'s Player profile';

/* Site Canonicals */
$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://project-esport.gg' . Yii::$app->request->url]);

/* twitter/facebook/google Metatags */
Yii::$app->metaClass->writeMetaUser($this, $model, $userInfo['nationality']);

?>
<div class="site-account">

    <div class="col-lg-3 avatarPanel">
        <img class="avatar-logo" src="<?= $userInfo['playerImage']; ?>.webp" alt="" onerror="this.src='<?= $userInfo['playerImage']; ?>.png'">

        <?php if($userInfo['isMySelfe']) : ?>
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
            <?= Html::img($userInfo['nationalityImg'], ['class' => 'nationality-logo']); ?>
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
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $userInfo['memberSince']; ?></div>
            </div>
            <div class="entry clearfix">
                <div class="col-xs-5 col-sm-3 col-lg-3">Alter / Geschlecht</div>
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $userInfo['age'] . " / " . $userInfo['gender']->getName(); ?></div>
            </div>
            <div class="entry clearfix">
                <div class="col-xs-5 col-sm-3 col-lg-3">Nationalität</div>
                <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= Html::img($userInfo['nationalityImg'], ['class' => 'nationality-logo']); ?><?= (NULL === $userInfo['nationality']) ? '' : $userInfo['nationality']->getName(); ?></div>
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
                        <div class="col-lg-12">
                            <?= Html::a($mainTeam['team']->getName() , ['/teams/team-details', 'id' => $mainTeam['team']->getId()]); ?> (<?= ($mainTeam['owner']) ? 'owner' : 'member'; ?>) </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="mainTeam">Sub Teams:</div>
                <?php foreach ($subTeams as $key => $subTeam): ?>
                    <div class="teamEntry clearfix">
                        <div class="col-lg-12"><?= Html::a($subTeam['team']->getName() , ['/teams/sub-team-details', 'id' => $subTeam['team']->getId()]) . " (" . $subTeam['team']->getTournamentMode()->one()->getName() . ")"; ?> (<?= ($subTeam['owner']) ? 'Captain' : (($subTeam['isSub']) ? 'Substitute' : 'Player'); ?>)</div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <div class="col-lg-2">

    </div>
</div>
