<?php

/* @var $this yii\web\View
 * @var $teamHierarchy array
 */

use yii\helpers\Html;

$this->title = 'Turnier Details';
?>

<div class="site-rl-tournament-details">
	<?php

    foreach($teamHierarchy as $hierarchy )  {

		$mainTeam = $hierarchy['mainTeam'];
        echo Html::a($mainTeam->getName() , ['/site/team-details', 'id' => $mainTeam->getId()]) . '<br>';


        foreach ($hierarchy['subTeams'] as $key => $subHierarchy) {

			$subTeam = $subHierarchy['subTeam'];
			$subTeamName = $subTeam->getName() . ' ' . $subTeam->getTournamentMode()->one()->getName();

			echo Html::a($subTeamName , ['/site/team-details', 'id' => $subTeam->getId()]) . '<br>';

			foreach ($subHierarchy['subTeamMember'] as $key => $subTeamMember) {

				$userClass = $subTeamMember->getUser()->one();
				$userName = $userClass->getUsername();
				$substitudeText = ($subTeamMember->getIsSubstitute()) ? 'Substitude' : 'Player';

                echo Html::a($userName , ['/site/team-details', 'id' => $userClass->getId()]) . ' (' . $substitudeText . ')<br>';
			};

		};

    };

	?>

</div>