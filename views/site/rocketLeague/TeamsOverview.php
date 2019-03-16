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

        <div class="mainTeam"><?= Html::a($mainTeam->getName() , ['/site/team-details', 'id' => $mainTeam->getId()]) . '(' . Html::a($mainTeamOwner , ['/site/team-details', 'id' => $mainTeam->getOwnerId()]) . ')'; ?></div>

        <?php foreach ($hierarchy['subTeams'] as $key => $subHierarchy) :
			$subTeam = $subHierarchy['subTeam'];
			$subTeamName = $subTeam->getName() . ' ' . $subTeam->getTournamentMode()->one()->getName();
			$subTeamManager = $subTeam->GetTeamCaptain()->one()->getUsername(); ?>

            <div class="subTeam"><?= Html::a($subTeamName , ['/site/team-details', 'id' => $subTeam->getId()]) . '(' . Html::a($subTeamManager , ['/site/team-details', 'id' => $subTeam->getTeamCaptainId()]) . ')'; ?></div>


            <?php foreach ($subHierarchy['subTeamMember'] as $key => $subTeamMember) :
				$userClass = $subTeamMember->getUser()->one();
				$userName = $userClass->getUsername();
				$substitudeText = ($subTeamMember->getIsSubstitute()) ? 'Substitude' : 'Player'; ?>

                <div class="subTeaMMember"><?= Html::a($userName , ['/site/team-details', 'id' => $userClass->getId()]) . ' (' . $substitudeText . ')'; ?></div>

            <?php  endforeach; ?>
        <?php  endforeach; ?>
	<?php  endforeach; ?>

</div>