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

    <?php if ($ruleSet['subRulesSet'] > 0): ?>
        <table class="turnierStatus foldable table table-bordered table-striped table-hover">
            <thead>
            <tr class="bg-warning">
                <th class="namedHeader" colspan="2"><?= $ruleSet['baseSet']; ?></th>
            </tr>
            <tr class="bg-warning fold">
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ruleSet['subRulesSet'] as $key => $subRuleSet): ?>
                <tr class="fold">
                    <td><?= $subRuleSet->GetRulesParagraph()." ".$subRuleSet->getSubRuleName(); ?></td>
                    <td><?= $subRuleSet->getSubRuleDescription(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

</div>