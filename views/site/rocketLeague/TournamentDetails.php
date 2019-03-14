<?php

/* @var $this yii\web\View
 * @var $tournament
 * @var $ruleSet array
 */

$this->title = 'Turnier Details';
?>
<div class="site-rl-tournament-details">

    <h1><?= $tournament->showRealTournamentName(); ?></h1>

    <h2><?= $ruleSet['baseSet']; ?></h2>

    <?php foreach ($ruleSet['subRulesSet'] as $key => $subRuleSet): ?>
        <div class="rulesBody"><?= $subRuleSet->GetRulesParagraph()." ".$subRuleSet->getSubRuleName(); ?></div>
        <div class="rulesBody"><?= $subRuleSet->getSubRuleDescription(); ?></div>
    <?php endforeach; ?>

</div>