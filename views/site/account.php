<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$teams = array(
    'Captain Viper' => array(
        'logo' => 'images/teams/Captain_Viper.png',
        'main' => array(
            'Captain Salty',
            'Mr. Viper',
        ),
        'subs' => array(
            'El Viper',
        ),
    ),
    'Stealth7 eSports' => array(
        'logo' => 'images/teams/Stealth7.jpg',
        'main' => array(
            'flexxy',
            'awxkeq',
        ),
        'subs' => array(
            'noavian',
        ),
    ),
    'AcTive' => array(
        'logo' => 'images/teams/Active.png',
        'main' => array(
            'Vxrus',
            'Crime',
        ),
        'subs' => array(
            'Rust',
        ),
    ),
    'Team Aspect' => array(
        'logo' => 'images/teams/Aspect.jpg',
        'main' => array(
            'GhostKilla',
            'OhJayy',
        ),
        'subs' => array(
            '',
        ),
    ),
    'Thinking' => array(
        'logo' => 'images/teams/Thinking.jpg',
        'main' => array(
            'Korazu',
            'JaePaenda;) ',
        ),
        'subs' => array(
            '',
        ),
    ),
    'Robotic Elite Clan' => array(
        'logo' => 'images/teams/REC.png',
        'main' => array(
            'P1st0lpr0',
            'Birnchen',
        ),
        'subs' => array(
            'Fanta',
        ),
    ),
    '.' => array(
        'logo' => '.',
        'main' => array(
            '.',
            '.',
        ),
        'subs' => array(
            '.',
        ),
    ),
);

$this->title = 'Account';
?>
<div class="site-account">

    <ul>
    <?php foreach($teams as $teamname => $tmpArr): ?>
        <?php if (isset($tmpArr['logo'])): ?>
            <?= Html::img($tmpArr['logo'], ['width' => '150px', 'height' => '150px']); ?>
        <?php endif; ?>

        <li class="teamName"><?php echo $teamname ?>
            <ul>
        <?php foreach($tmpArr as $mainSub => $memberArr): ?>

            <?php if ($mainSub === 'main' || $mainSub === 'subs'): ?>

                <li><?= ($mainSub === 'main') ? 'Mainspieler' : 'Ersatzspieler'; ?>
                    <ul>
                        <?php foreach($memberArr as $member): ?>
                        <li class="memberName"><?php echo $member ?></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endif; ?>

        <?php endforeach; ?>

            </ul>
        </li>
        
    <?php endforeach; ?>
    </ul>

</div>
