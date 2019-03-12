<?php

/* @var $this yii\web\View
    @var $tournamentList array<Tournaments>
*/

usort($tournamentList, function($a, $b) {
	return $a->getDtStartingTime() > $b->getDtStartingTime();
});

$now = new DateTime();

$registerTurnier = array();
$checkInTurnier = array();
$preRunningTurnier = array();
$runningTurnier = array();
$archivTurnier = array();
foreach ($tournamentList as $key => $tournament) {
	
	$tmp = new DateTime($tournament->getDtStartingTime());
	$diffStart = $now->diff($tmp);
	if (1 === $diffStart->invert) {
		$archivTurnier[] = $tournament;
		continue;
	}

	$checkInBegin = new DateTime($tournament->getDtCheckinBegin());
	$checkInEnd = new DateTime($tournament->getDtCheckinEnd());
	$diffBegin = $now->diff($checkInBegin);
	$diffEnd = $now->diff($checkInEnd);
	if (1 === $diffBegin->invert && 0 === $diffEnd->invert) {
		$checkInTurnier[] = $tournament;
		continue;
	}
	if (1 === $diffEnd->invert && 0 === $diffStart->invert) {
		$preRunningTurnier[] = $tournament;
		continue;
	}
	if (1 === $diffStart->invert /*&& $checkTurnierCompleted */) {
		$runningTurnier[] = $tournament;
		continue;
	}
	$registerTurnier[] = $tournament;
}

$this->title = 'RL Tournament Overview';
?>
<div class="site-rl-tournament-overview">

    <h1>Rocket League Tournament Overview</h1>

	<div class="turnierStatus">
		<div>Turnier Archive</div>
		<?php foreach ($archivTurnier as $key => $tournament): ?>
			<div><?= $tournament->getTournamentName(); ?></div>
		<?php endforeach; ?>
	</div>

	<div class="turnierStatus">
		<div>Check In möglich</div>
		<?php foreach ($checkInTurnier as $key => $tournament): ?>
			<div><?= $tournament->getTournamentName(); ?></div>
		<?php endforeach; ?>
	</div>

	<div class="turnierStatus">
		<div>Laufende Turniere</div>
		<?php foreach ($runningTurnier as $key => $tournament): ?>
			<div><?= $tournament->getTournamentName(); ?></div>
		<?php endforeach; ?>
	</div>

	<div class="turnierStatus">
		<div>Registration möglich</div>
		<?php foreach ($registerTurnier as $key => $tournament): ?>
			<div><?= $tournament->getTournamentName(); ?></div>
		<?php endforeach; ?>
	</div>

	<div class="turnierStatus">
		<div>Turnier kurz vor Startbeginn</div>
		<?php foreach ($preRunningTurnier as $key => $tournament): ?>
			<div><?= $tournament->getTournamentName(); ?></div>
		<?php endforeach; ?>
	</div>

</div>