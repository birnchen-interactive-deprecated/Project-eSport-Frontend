<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$teams = array(
    'Captain Viper' => array(
        'logo' => 'images/teams/Captain_Viper.png',
        'main' => array(
            'Captain Salty',
            'Mr. Viper',
            'El Viper',
        ),
        'subs' => array(
            'Corah',
            'Marc',
        ),
    ),
    'Stealth7 eSports' => array(
        'logo' => 'images/teams/Stealth7.jpg',
        'main' => array(
            'noavian',
            'awxkeq',
            'flexxy',
        ),
        'subs' => array(
            'ZedeX',
            '',
        ),
    ),
    'AcTive' => array(
        'logo' => 'images/teams/Active.png',
        'main' => array(
            'Vxrus',
            'Crime',
            'RUST',
        ),
        'subs' => array(
            'Nexon',
        ),
    ),
    'Team Aspect' => array(
        'logo' => 'images/teams/Aspect.jpg',
        'main' => array(
            'GhostKilla',
            'Bax',
            'Zorn',
        ),
        'subs' => array(
            'OhJayy',
        ),
    ),
    'eQuality.' => array(
        'logo' => 'images/teams/eQuality.png',
        'main' => array(
            'Serenity',
            'SoulSynergy',
            'Cietrus',
        ),
        'subs' => array(
            '',
        ),
    ),
    'Thinking' => array(
        'logo' => 'images/teams/Thinking.jpg',
        'main' => array(
            'Korazu',
            'JaePaenda;)',
            'Shila',
        ),
        'subs' => array(
            '',
        ),
    ),
    '.' => array(
        'logo' => 'images/teams/Thinking.jpg',
        'main' => array(
            '.',
            '.;)',
            '.',
        ),
        'subs' => array(
            '.',
            '.',
        ),
    ),
);

$this->title = 'Tournaments';
?>
<div class="site-tournaments">

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
