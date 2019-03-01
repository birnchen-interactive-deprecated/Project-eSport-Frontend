<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$teams = array(
    'Team Name 1' => array(
        'Spieler 1',
        'Spieler 2',
        'Spieler 3',
    ),
    'Team Name 2' => array(
        'Spieler 1',
        'Spieler 2',
        'Spieler 3',
    ),
);

$this->title = 'Tournaments';
?>
<div class="site-tournaments">
    <?php if(!Yii::$app->user->isGuest):?>

        <?php foreach($teams as $teamname => $memberArr): ?>
            <div clas=""><?php echo $teamname ?></div>
            <?php foreach($memberArr as $member): ?>
                <div clas=""><?php echo $member ?></div>
            <?php endforeach; ?>
        <?php endforeach; ?>


    <?php else: ?>
        <div class="LoggingIn">
            Please <?= Html::a("Login", ['login']);?> to see all Informations <br>
            Bitte <?= Html::a("Logge", ['login']);?> dich ein um alle Informationen zu sehen.
        </div>
    <?php endif; ?>
</div>
