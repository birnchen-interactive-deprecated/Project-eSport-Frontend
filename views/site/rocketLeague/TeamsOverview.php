<?php

/* @var $this yii\web\View
 * @var $teamHierarchy array
 */

use yii\helpers\Html;

$this->title = 'Turnier Details';
?>

<div class="site-rl-tournament-details">
	<?php foreach($teamHierarchy as $hierarchy ):
        $mainTeam = $hierarchy['mainTeam'];
        $mainTeamOwner = $mainTeam->getOwner()->one()->getUsername(); ?>

        <div class="mainTeam"><?= Html::a($mainTeam->getName() , ['/site/team-details', 'id' => $mainTeam->getId()]); ?></div><div class="mainTeamOwner"> <?= 'owner:  ' . Html::a($mainTeamOwner , ['/site/show-user', 'id' => $mainTeam->getOwnerId()]); ?></div>

        <?php foreach ($hierarchy['subTeams'] as $key => $subHierarchy) :
			$subTeam = $subHierarchy['subTeam'];
			$subTeamName = $subTeam->getName() . ' ' . $subTeam->getTournamentMode()->one()->getName();
			$subTeamManager = $subTeam->GetTeamCaptain()->one()->getUsername(); ?>

            <div class="subTeam"><?= Html::a($subTeamName , ['/site/team-details', 'id' => $subTeam->getId()]); ?></div><div class="subTeamOwner"> <?= 'captain: ' . Html::a($subTeamManager , ['/site/show-user', 'id' => $subTeam->getTeamCaptainId()]); ?></div>


            <?php foreach ($subHierarchy['subTeamMember'] as $key => $subTeamMember) :
				$userClass = $subTeamMember->getUser()->one();
				$userName = $userClass->getUsername();
				$substitudeText = ($subTeamMember->getIsSubstitute()) ? 'substitude' : 'player'; ?>

                <div class="subTeaMember"><?= Html::a($userName , ['/site/show-user', 'id' => $userClass->getId()]); ?></div><div class="playerPosition"> <?= ' (' . $substitudeText . ')'; ?></div>

            <?php  endforeach; ?>
        <?php  endforeach; ?>
    <hr>
	<?php  endforeach; ?>

</div>