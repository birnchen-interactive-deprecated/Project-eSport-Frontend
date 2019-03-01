<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$teams = array(
    'Team Name 1' => array(
        'main' => array(
            'Spieler 1',
            'Spieler 2',
            'Spieler 3',
        ),
        'subs' => array(
            'Ersatzspieler 1',
            'Ersatzspieler 2',
        ),
    ),
    'Team Name 2' => array(
        'main' => array(
            'Spieler 1',
            'Spieler 2',
            'Spieler 3',
        ),
        'subs' => array(
            'Ersatzspieler 1',
            'Ersatzspieler 2',
        ),
    ),
);

$this->title = 'Tournaments';
?>
<div class="site-tournaments">

    <ul>
    <?php foreach($teams as $teamname => $memberArr): ?>
        <li class="teamName"><?php echo $teamname ?>
            <ul>
        <?php foreach($memberArr['main'] as $member): ?>
            <li class="memberName"><?php echo $member ?></li>
        <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
    </ul>

</div>
