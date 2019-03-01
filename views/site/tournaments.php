<?php

/* @var $this yii\web\View */

$this->title = 'Tournaments Overview';
?>
<div class="site-tournaments">
    <?php if(!Yii::$app->user->isGuest):?>

    <?php else: ?>
        <div class="LoggingIn">
            Please <?= Html::a("Login", ['login']);?> to see all Informations <br>
            Bitte <?= Html::a("Logge", ['login']);?> dich ein um alle Informationen zu sehen.
        </div>
    <?php endif; ?>
</div>
