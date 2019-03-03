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
        'logo' => 'images/teams/thinking.jpg',
        'main' => array(
            'Korazu',
            'JaePaenda;)',
            'Covari',
        ),
        'subs' => array(
            'Shila',
        ),
    ),
    'eSport Rhein-Neckar' => array(
        'logo' => 'images/teams/ern.png',
        'main' => array(
            'StevieT',
            'Sverin99',
            'mrtz',
        ),
        'subs' => array(
            'Zignaf',
        ),
    ),
    'Robotic Elite Clan' => array(
        'logo' => 'images/teams/REC.png',
        'main' => array(
            'P1st0lpr0',
            'Birnchen',
            'Fanta'
        ),
        'subs' => array(
            '',
        ),
    ),
    'GHR Agency' => array(
        'logo' => 'images/teams/ghr.png',
        'main' => array(
            'leo19993',
            '',
            '',
        ),
        'subs' => array(
            '',
        ),
    ),
);

$this->title = 'Tournaments';
?>
<div class="site-tournaments">

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
