<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$teams = array(
    'Team Name 1' => array(
        'main' => array(
            'Spieler 1',
            'Spieler 2',
        ),
        'subs' => array(
            'Ersatzspieler 1',
        ),
    ),
    'Team Name 2' => array(
        'main' => array(
            'Spieler 1',
            'Spieler 2',
        ),
        'subs' => array(
            'Ersatzspieler 1',
        ),
    ),
);

$this->title = 'Account';
?>
<div class="site-account">

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
