<?php

/* @var $this \yii\web\View */

$this->title = 'Tournaments Overview';
?>
<div class="site-tournaments">
    <?php if(!Yii::$app->user->isGuest):?>
        <div class="welcomer">
            Willkommen zum ersten Spieltag der zweiten Season des Gerta Cups. <br>
            Aufgrund technischer Probleme wird der Checkin über unseren <br>
            <a class="dclink" href="https://discord.gg/f6NXNFy">Discord</a> <br>
            ablaufen. Alle Registrierten User mögen dort Bitte um 18:00 eintreffen <br>
            und im Warteraum warten. <br>
            Checkin ist von 18:00 - 18:15, wer nicht da ist in dieser Zeit wird nicht eingecheckt. <br>
        </div>
        <iframe class="regeln" src="https://docs.google.com/document/d/e/2PACX-1vR66PMmQPCHbttNuV5IuRwPj0wPzrxe03-xBIyu1r-gWfIuBKnZyQ2ELYYEGKZQ4OFaunfwJWQtNOW9/pub?embedded=true"></iframe>
    <?php endif; ?>
</div>