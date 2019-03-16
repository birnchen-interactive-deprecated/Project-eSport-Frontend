<?php

/* @var $this yii\web\View
 * @var $subteams array
 */

use yii\helpers\Html;

$this->title = 'Turnier Details';
?>

<div class="site-rl-tournament-details">
    <?php foreach($subteams as $subteam ) : ?>
        <?= Html::a($subteam->getName() , ['/site/team-details', 'id' => $subteam->getId()]) ?>
    <?php endforeach; ?>
</div>