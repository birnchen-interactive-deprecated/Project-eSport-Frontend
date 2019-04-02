<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 18.03.2019
 * Time: 09:15
 */

/* @var $this yii\web\View *
 * @var $teamDetails array
 * @var $teamInfo array
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* Browser Title */
$this->title = $teamDetails->getName() . '\'s Team profile';

/* Site Canonicals */
$this->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->url]);

/* twitter/facebook/google Metatags */
Yii::$app->metaClass->writeMetaMainTeam($this, $teamDetails, $this->title);

?>

<div class="site-team-details">
    <div class="col-lg-3 avatarPanel">
        <?= Html::img($teamInfo['teamImage'], ['class' => 'avatar-logo']); ?>
        <?php if($teamInfo['isOwner']) : ?>
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


    <div class="col-lg-7 teamPanel">

        <div class="header">
            <?= Html::img($teamInfo['nationalityImg'], ['class' => 'nationality-logo']); ?>
            <span class="teamname"><?= $teamDetails->getName(); ?></span>
            <span class="teamid">id: <?= $teamDetails->getId(); ?></span>
        </div>
        <div class="entry clearfix">
            <div class="col-xs-5 col-sm-3 col-lg-3">Name</div>
            <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $teamDetails->getName(); ?></div>
        </div>
        <div class="entry clearfix">
            <div class="col-xs-5 col-sm-3 col-lg-3">Shortcode</div>
            <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $teamDetails->getShortCode(); ?></div>
        </div>
        <div class="entry clearfix">
            <div class="col-xs-5 col-sm-3 col-lg-3">Mitglied Seit</div>
            <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $teamInfo['memberSince']; ?></div>
        </div>
        <div class="entry clearfix">
            <div class="col-xs-5 col-sm-3 col-lg-3">Nationalität</div>
            <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= Html::img($teamInfo['nationalityImg'], ['class' => 'nationality-logo']); ?></div>
        </div>
        <div class="entry clearfix">
            <div class="col-xs-5 col-sm-3 col-lg-3">Description</div>
            <div class="col-xs-7 col-sm-9 col-lg-9 context"><?= $teamDetails->getDescription() ?></div>
        </div>
    </div>

    <div class="teamBody">


    </div>
</div>
