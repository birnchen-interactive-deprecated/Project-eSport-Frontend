<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$teams = array(
    'Safari Force' => array(
        'logo' => '',
        'main' => array(
            'Taubenhaucher',
            'vandaleon271',
            'WaterFlame14',
        ),
        'subs' => array(
            '',
            '',
        ),
    ),
);

$this->title = 'Tournaments';
?>
<div class="site-tournaments">

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
