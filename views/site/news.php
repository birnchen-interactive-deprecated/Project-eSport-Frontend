<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$players = array(
    'Spieler 1',
    'SPieler 2',
);

$this->title = 'News';
?>
<div class="site-news">
    <?php if(!Yii::$app->user->isGuest):?>

        <?php foreach($players as $player): ?>
            <div clas=""><?php echo $player ?></div>
        <?php endforeach; ?>

    <?php else: ?>
        <div class="LoggingIn">
            Please <?= Html::a("Login", ['login']);?> to see all Informations <br>
            Bitte <?= Html::a("Logge", ['login']);?> dich ein um alle Informationen zu sehen.
        </div>
    <?php endif; ?>
</div>
