<?php

/* @var $this yii\web\View
 * @var $tournament
 * $var  $ruleSet
 */

$this->title = 'Turnier Details';
?>
<div class="site-news">

    Turnier Details Seite: <?= $tournament->showRealTournamentName(); ?></div>
    </br>
    Turnier Ruleset: <?= $ruleSet->getRulesName(); ?></div>

    <div class="rulesHeader"></div>
    <div class="rulesBody"></div>

</div>