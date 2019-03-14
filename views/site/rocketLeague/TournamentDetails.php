<?php

/* @var $this yii\web\View
 * @var $tournament
 * @var $ruleSet array
 */

$this->title = 'Turnier Details';
?>
<div class="site-rl-tournament-details">

    <h1><?= $tournament->showRealTournamentName(); ?></h1>

    <?php if ($ruleSet['subRulesSet'] > 0): ?>
        <table class="rulesStatus foldable table table-bordered table-striped table-hover">
            <thead>
            <tr class="bg-warning">
                <th class="namedHeader" colspan="2"><?= $ruleSet['baseSet']; ?></th>
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