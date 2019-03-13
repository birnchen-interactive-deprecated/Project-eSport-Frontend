<?php

/* @var $this yii\web\View *
 * @var $model app\modules\core\models\User
 * @var $gender app\modules\core\models\Gender
 * @var $language app\modules\core\models\Language
 * @var $nationality app\modules\core\models\Nationality
 * @var $mainTeams array
 * @var $subTeams array
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$playerImage = 'images/UserAvatar/' . $model->user_id . '.png';
$playerNationality = 'images/nationality/' . $model->nationality_id . '.png';

$memberDateTime = new DateTime($model->dt_created);
$memberDate = $memberDateTime->format('d.m.y');

$memberBirthdayRaw = new DateTime($model->birthday);
$now = new DateTime();

$ageDiff = $memberBirthdayRaw->diff($now);
$age = $ageDiff->y;

$this->title = 'My Account';
?>
<div class="site-account">

    <div class="leftPanel clearfix">
        <?= Html::img($playerImage, ['class' => 'avatar-logo']); ?>
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
                    <div class="mainTeam"><?= $subTeam['team']->getName() . "(" . $subTeam['team']->getTournamentModeId() . ")"; ?></div>
                    <?php if ($subTeam['owner']): ?>
                        <div class="teamPosition">(Captain)</div>
                    <?php elseif (!$subTeam['owner']): ?>
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
