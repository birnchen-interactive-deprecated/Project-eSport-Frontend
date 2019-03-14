<?php

/* @var $this yii\web\View
 * @var $tournament
 * @var $ruleSet array
 */
echo $ruleSet;
$this->title = 'Turnier Details';
?>
<div class="site-news">

    Turnier Details Seite: <?= $tournament->showRealTournamentName(); ?></div>
    </br>
    Turnier Ruleset: <?= $ruleSet['baseSet']; ?></div>

    <div class="rulesHeader"><?= $ruleSet['baseSet']; ?></div>
    <div class="rulesBody"><?= $ruleSet['subRulesSet']; ?></div>

</div>