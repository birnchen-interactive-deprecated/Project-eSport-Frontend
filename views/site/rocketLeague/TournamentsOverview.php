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

	<?php if (count($archivTurnier) > 0): ?>
	<table class="turnierStatus table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-warning">
				<th colspan="2">Turnier Archive</th>
			</tr>
			<tr class="bg-warning">
				<th>Turniername</th>
				<th>Startdatum</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($archivTurnier as $key => $tournament): ?>
				<tr>
					<td><?= $tournament->getTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

	<?php if (count($checkInTurnier) > 0): ?>
	<table class="turnierStatus table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-success">
				<th colspan="3">Check In möglich</th>
			</tr>
			<tr class="bg-success">
				<th>Turniername</th>
				<th>Checkin Zeitraum</th>
				<th>Checkin</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($checkInTurnier as $key => $tournament): ?>
				<tr>
					<td><?= $tournament->getTournamentName(); ?></td>
					<td><?= $tournament->getDtCheckinBegin(); ?> - <?= $tournament->getDtCheckinEnd(); ?></td>
					<td>
						<?= Html::submitButton('Check In', ['class' => 'btn btn-success']); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

	<?php if (count($runningTurnier) > 0): ?>
	<table class="turnierStatus table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-success">
				<th colspan="2">Laufende Turniere</th>
			</tr>
			<tr class="bg-success">
				<th>Turniername</th>
				<th>Startdatum</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($runningTurnier as $key => $tournament): ?>
				<tr>
					<td><?= $tournament->getTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

	<?php if (count($registerTurnier) > 0): ?>
	<table class="turnierStatus table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-info">
				<th colspan="2">Registration möglich</th>
			</tr>
			<tr class="bg-info">
				<th>Turniername</th>
				<th>Startdatum</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($registerTurnier as $key => $tournament): ?>
				<tr>
					<td><?= $tournament->getTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

	<?php if (count($preRunningTurnier) > 0): ?>
	<table class="turnierStatus table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-danger">
				<th colspan="2">Turnier kurz vor Startbeginn</th>
			</tr>
			<tr class="bg-danger">
				<th>Turniername</th>
				<th>Startdatum</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($preRunningTurnier as $key => $tournament): ?>
				<tr>
					<td><?= $tournament->getTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

</div>