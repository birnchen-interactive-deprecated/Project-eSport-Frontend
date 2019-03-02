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
        'logo' => 'images/teams/thinking.jpg',
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
    'Panicflip by OG' => array(
        'logo' => 'images/teams/panicflip.jpg',
        'main' => array(
            'VTrayxX ',
            'OG_PulseGlxy',
        ),
        'subs' => array(
            '',
        ),
    ),
    'Kilian Heinrich' => array(
        'logo' => 'images/teams/Tanzverbot.png',
        'main' => array(
            'Tanz',
            'Verbot',
        ),
        'subs' => array(
            '',
        ),
    ),
    'Rainer Winkler' => array(
        'logo' => 'images/teams/winkler.jpg',
        'main' => array(
            'Meddl',
            'Leute',
        ),
        'subs' => array(
            '',
        ),
    ),
);

$this->title = 'Account';
?>
<div class="site-account">

    <?php foreach($teams as $teamName => $tmpArr): ?>
        <div class="team clearfix">
            <span class="col-lg-2">
                <?= Html::img($tmpArr['logo'], ['class' => 'teamLogo', 'width' => '150px', 'height' => '150px']); ?>
            </span>

            <ul class="teamList col-lg-10">
                <li class="teamName">
                    <?= $teamName; ?>
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
                </li>
            </ul>
        </div>
    <?php endforeach; ?>

</div>
