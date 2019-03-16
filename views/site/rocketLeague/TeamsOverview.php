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

		foreach ($hierarchy['subTeams'] as $key => $subHierarchy) {

			$subTeam = $subHierarchy['subTeam'];
			$subTeamName = $subTeam->getName() . ' ' . $subTeam->getTournamentMode()->one()->getName();

			echo Html::a($subTeamName , ['/site/team-details', 'id' => $subTeam->getId()]) . '<br>';

			foreach ($subHierarchy['subTeamMember'] as $key => $subTeamMember) {

				$userClass = $subTeamMember->getUser()->one();
				$userName = $userClass->getUsername();

			};

		};

    };

	?>

</div>