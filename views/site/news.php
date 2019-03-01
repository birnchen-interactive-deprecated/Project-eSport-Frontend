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

    <ul>
        <?php foreach($players as $player): ?>
            <li><?= $player; ?></li>
        <?php endforeach; ?>
    </ul>

</div>
