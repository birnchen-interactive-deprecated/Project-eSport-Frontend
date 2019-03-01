<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$players = array(
    'Korazu',
    'JaePanda',
    'DerLoard',
    'Exokiller',
    'Pist0lpr0',
    'Aero',
    'Luzifer',
    'Captain Salty',
    'Niyari',
    'Nexon',
    'Vxrus',
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
