<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$teams = array(
    'Team Name 1' => array(
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
