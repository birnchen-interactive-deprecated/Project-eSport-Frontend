<?php

/* @var $this yii\web\View
 * @var $tournament
 * @var $ruleSet array
 */

$this->title = 'Turnier Details';
?>
<div class="site-news">

    Turnier Details Seite: <?= $tournament->showRealTournamentName(); ?></div>
    </br>
    Turnier Ruleset: <?= $ruleSet['baseSet']; ?></div>

    <div class="rulesHeader"></div>
    <div class="rulesBody"></div>

</div>