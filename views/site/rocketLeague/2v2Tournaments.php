<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$teams = array(
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

    <?php foreach ($teams as $teamName => $tmpArr): ?>
        <div class="team clearfix">
            <span class="col-lg-2">
                <?= Html::img($tmpArr['logo'], ['class' => 'teamLogo', 'width' => '150px', 'height' => '150px']); ?>
            </span>

            <ul class="teamList col-lg-10">
                <li class="teamName">
                    <?= $teamName; ?>
                    <?php foreach ($tmpArr

                    as $mainSub => $memberArr): ?>

                    <?php if ($mainSub === 'main' || $mainSub === 'subs'): ?>

                <li><?= ($mainSub === 'main') ? 'Mainspieler' : 'Ersatzspieler'; ?>
                    <ul>
                        <?php foreach ($memberArr as $member): ?>
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
