<?php

/* @var $this yii\web\View
 * @var $tournament
 * @var $ruleSet array
 * @var participatingEntrys array
 */

use yii\helpers\Html;
use app\modules\core\models\User;
use app\modules\core\models\SubTeam;
use app\modules\core\models\PlayerParticipating;
use app\modules\core\models\TeamParticipating;

$userTeam = '';
if (isset($participatingEntrys[0])) {
    if ($participatingEntrys[0] instanceOf User) {
        $userTeam = 'User';
    } else {
        $userTeam = 'Team';
    }
}

$countCheckedIn = 0;
foreach ($participatingEntrys as $key => $entry) {
    if ($entry instanceOf User) {
        $checkedIn = $entry->hasOne(PlayerParticipating::className(), ['user_id' => 'user_id'])->one()->getCheckedIn();
    } else if ($entry instanceOf SubTeam) {
        $checkedIn = $entry->hasOne(TeamParticipating::className(), ['sub_team_id' => 'sub_team_id'])->one()->getCheckedIn();
    }
    if (1 == $checkedIn) {
        $countCheckedIn++;
    }
}

$checkInEnd = new DateTime($tournament->getDtCheckinEnd());
$now = new DateTime();
if ($now->diff($checkInEnd)->invert == 1) {
    usort($participatingEntrys, function($a, $b) use ($tournament) {
        return $a->getCheckInStatus($tournament->getId()) < $b->getCheckInStatus($tournament->getId());
    });
}

$this->title = 'Turnier Details';
?>
<div class="site-rl-tournament-details">

    <h1><?= $tournament->showRealTournamentName(); ?></h1>

    <?php if (count($ruleSet['subRulesSet']) > 0): ?>
        <table class="rulesStatus foldable table table-bordered table-striped table-hover">
            <thead>
            <tr class="bg-warning">
                <th class="namedHeader" colspan="2"><?= $ruleSet['baseSet']; ?></th>
            </tr>
            <tr class="bg-warning fold">
                <th>Paragraph</th>
                <th>Reglement</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ruleSet['subRulesSet'] as $key => $subRuleSet): ?>
                <tr class="fold">
                    <td><?= $subRuleSet->GetRulesParagraph().". ".$subRuleSet->getSubRuleName(); ?></td>
                    <td><?= $subRuleSet->getSubRuleDescription(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <table class="points foldable table table-bordered table-striped table-hover">
        <thead>
            <tr class="bg-warning">
                <th class="namedHeader" colspan="2">Punktetabelle</th>
            </tr>
        </thead>
        <tbody>
            <tr class="fold">
                <td>Platz 1</td>
                <td>Punkte 20</td>
            </tr>
            <tr class="fold">
                <td>Platz 2</td>
                <td>Punkte 17</td>
            </tr>
            <tr class="fold">
                <td>Platz 3</td>
                <td>Punkte 15</td>
            </tr>
            <tr class="fold">
                <td>Platz 4</td>
                <td>Punkte 13</td>
            </tr>
            <tr class="fold">
                <td>Platz 5 - 6</td>
                <td>Punkte 11</td>
            </tr>
            <tr class="fold">
                <td>Platz 7 - 8</td>
                <td>Punkte 9</td>
            </tr>
            <tr class="fold">
                <td>Platz 9 - 12</td>
                <td>Punkte 7</td>
            </tr>
            <tr class="fold">
                <td>Platz 13 - 16</td>
                <td>Punkte 5</td>
            </tr>
            <tr class="fold">
                <td>Platz 17 - 24</td>
                <td>Punkte 3</td>
            </tr>
            <tr class="fold">
                <td>Platz 25 - 32</td>
                <td>Punkte 1</td>
            </tr>
            <tr class="fold">
                <td>Platz 33+</td>
                <td>Punkte 0</td>
            </tr>

        </tbody>
    </table>

    <table class="participants foldable table table-bordered table-striped table-hover">
        <thead>
            <tr class="bg-success">
                <th class="namedHeader" colspan="5">Registrierungen</span></th>
            </tr>
            <tr class="bg-success">
                <th colspan="2"><?= $userTeam; ?> <span class="badge"><?= count($participatingEntrys); ?></th>
                <?php if ('Team' === $userTeam): ?>
                    <th>Spieler</th>
                <?php endif; ?>
                <th>Checked-In <span class="badge"><?= $countCheckedIn . ' / 32'; ?></span></th>
                <th>Disqualifiziert</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participatingEntrys as $key => $entry): ?>
                <?php

                    $imgPath = ($entry instanceOf User) ? 'images/UserAvatar/' . $entry->user_id . '.png' : 'images/teams/' . $entry->sub_team_id . '.png';
                    $entryName = ($entry instanceOf User) ? $entry->getUsername() : $entry->getName();

                    $checkInStatus = $entry->getCheckInStatus($tournament->getId());
                    $checkInText = (false === $checkInStatus) ? 'Not Checked In' : 'Checked In';
                    $checkInClass = (false === $checkInStatus) ? 'alert-danger' : 'alert-success';

                    $disqStatus = $entry->getDisqualifiedStatus($tournament->getId());
                    $disqText = (false === $disqStatus) ? '' : 'Disqualifiziert';
                    $disqClass = (false === $disqStatus) ? '' : 'alert-danger';
                ?>
                <tr class="fold">
                    <td class="imageCell"><?= Html::img($imgPath, ['class' => 'entry-logo']); ?></td>
                    <td class="nameCell"><?= $entryName; ?></td>
                    <?php if ('Team' === $userTeam): ?>
                        <td><?= $entry->getTeamMembersFormatted(); ?></td>
                    <?php endif; ?>
                    <td class="checkInCell <?= $checkInClass; ?>"><?= $checkInText ?></td>
                    <td class="disqCell <?= $disqClass; ?>"><?= $disqText ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>