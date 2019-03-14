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

    <?php foreach ($ruleSet['subRulesSet'] as $key => $subRuleSet): ?>
        <?php $paragraph = $subRuleSet->GetRulesParagraph(); ?>
        <div class="rulesBody"><?= " ".$subRuleSet->getSubRuleName(); ?></div>
        <div class="rulesBody"><?= $subRuleSet->getSubRuleDescription(); ?></div>
    <?php endforeach; ?>

</div>