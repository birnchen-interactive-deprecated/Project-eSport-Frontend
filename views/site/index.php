<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Welcome';
?>
<div class="site-index">
    <?php if (!Yii::$app->user->isGuest): ?>
        <div class="welcome">
            Willkommen auf unserer Turnier Website.
        </div>
</div>
