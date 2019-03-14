<?php

/* @var $this yii\web\View
    @var $tournamentList array<Tournaments>
*/

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

usort($tournamentList, function($a, $b) {
	return $a->getDtStartingTime() > $b->getDtStartingTime();
});

$user = Yii::$app->user->identity;
$subTeams = $user->getSubTeams()->all();

$now = new DateTime();

$registerTurnier = array();
$checkInTurnier = array();
$preCheckInTurnier = array();
$preRunningTurnier = array();
$runningTurnier = array();
$archivTurnier = array();
$plannedTurnier = array();
foreach ($tournamentList as $key => $tournament) {
	
	$turnierStart = new DateTime($tournament->getDtStartingTime());
	$diffStart = $now->diff($turnierStart);
	if (1 === $diffStart->invert /*&& $checkTurnierCompleted */) {
		$archivTurnier[] = $tournament;
		continue;
	}

	$checkInBegin = new DateTime($tournament->getDtCheckinBegin());
	$diffBegin = $now->diff($checkInBegin);

	$checkInEnd = new DateTime($tournament->getDtCheckinEnd());
	$diffEnd = $now->diff($checkInEnd);

	$registerStart = new DateTime($tournament->getDtRegisterBegin());
	$diffRegBegin = $now->diff($registerStart);

	$registerEnd = new DateTime($tournament->getDtRegisterEnd());
	$diffRegEnd = $now->diff($registerEnd);

	if (1 === $diffRegBegin->invert && 0 === $diffRegEnd->invert) {
		$registerTurnier[] = $tournament;
		continue;
	}
	if (1 === $diffRegEnd->invert && 0 === $diffBegin->invert) {
		$preCheckInTurnier[] = $tournament;
		continue;
	}
	if (1 === $diffBegin->invert && 0 === $diffEnd->invert) {
		$checkInTurnier[] = $tournament;
		continue;
	}
	if (1 === $diffEnd->invert && 0 === $diffStart->invert) {
		$preRunningTurnier[] = $tournament;
		continue;
	}
	if (1 === $diffStart->invert) {
		$runningTurnier[] = $tournament;
		continue;
	}
	$plannedTurnier[] = $tournament;
}

$this->title = 'RL Tournament Overview';
?>
<div class="site-rl-tournament-overview">

    <h1>Rocket League Tournament Overview</h1>

	<?php if (count($runningTurnier) > 0 || count($preRunningTurnier) > 0): ?>
	<table class="turnierStatus table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-success">
				<th class="namedHeader" colspan="2">Laufende Turniere <span class="badge"><?= (count($runningTurnier) + count($preRunningTurnier)); ?></span></th>
			</tr>
			<tr class="bg-success">
				<th>Turniername</th>
				<th>Startdatum</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($runningTurnier as $key => $tournament): ?>
				<tr>
					<td><?= $tournament->showRealTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
					<td>Running</td>
				</tr>
			<?php endforeach; ?>
			<?php foreach ($preRunningTurnier as $key => $tournament): ?>
				<tr>
					<td><?= $tournament->showRealTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
					<td>Preparing</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

	<?php if (count($checkInTurnier) > 0 || count($preCheckInTurnier) > 0): ?>
	<table class="turnierStatus table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-success">
				<th class="namedHeader" colspan="3">Check In Turniere <span class="badge"><?= (count($checkInTurnier) + count($preCheckInTurnier)); ?></span></th>
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
					<td><?= $tournament->showRealTournamentName(); ?></td>
					<td><?= $tournament->getDtCheckinBegin(); ?> - <?= $tournament->getDtCheckinEnd(); ?></td>
					<td>
						<?= Html::submitButton('Check In', ['class' => 'btn btn-success']); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php foreach ($preCheckInTurnier as $key => $tournament): ?>
				<tr>
					<td><?= $tournament->showRealTournamentName(); ?></td>
					<td><?= $tournament->getDtCheckinBegin(); ?> - <?= $tournament->getDtCheckinEnd(); ?></td>
					<td>Preparing</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

	<?php if (count($registerTurnier) > 0): ?>
	<table class="turnierStatus table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-info">
				<th class="namedHeader" colspan="4">Registration Turniere <span class="badge"><?= count($registerTurnier); ?></span></th>
			</tr>
			<tr class="bg-info">
				<th>Turniername</th>
				<th>Startdatum</th>
				<th>Checkin Zeitraum</th>
				<th>Register</th>
			</tr>
		</thead>
		<tbody>
        <?= //Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update' , ['/site/rl-tournaments-details', 'id' => 2]) ?>
        <? //Html::a($tournament->showRealTournamentName() , ['/site/rl-tournaments-details', 'id' => $tournament->getId()]) ?>
			<?php foreach ($registerTurnier as $key => $tournament): ?>
				<?php
					$checkInBegin = new DateTime($tournament->getDtCheckinBegin());
					$checkInEnd = new DateTime($tournament->getDtCheckinEnd());
				?>
				<tr>

					<td><?= $tournament->showRealTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
					<td><?= $checkInBegin->format('H:i'); ?> - <?= $checkInEnd->format('H:i'); ?></td>
					<td>
						<?php
							 if ($tournament->showRegisterBtn($subTeams)) {
								$btns = $tournament->getRegisterBtns($subTeams, $user);
								foreach ($btns as $key => $btn) {

									$form = ActiveForm::begin([
										'id' => 'registerForm',
									]);
									echo Html::hiddenInput($btn['type'], $btn['id']);
									echo Html::hiddenInput('tournamentId', $tournament->getId());
									echo $btn['btn'];
									echo ' ';
									echo $btn['name'];
									ActiveForm::end();
								}
							}
						?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

	<?php if (count($plannedTurnier) > 0): ?>
	<table class="turnierStatus foldable table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-warning">
				<th class="namedHeader" colspan="2">Geplante Turniere <span class="badge"><?= count($plannedTurnier); ?></span></th>
			</tr>
			<tr class="bg-warning fold">
				<th>Turniername</th>
				<th>Startdatum</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($plannedTurnier as $key => $tournament): ?>
				<tr class="fold">
					<td><?= $tournament->showRealTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

	<?php if (count($archivTurnier) > 0): ?>
	<table class="turnierStatus foldable table table-bordered table-striped table-hover">
		<thead>
			<tr class="bg-warning">
				<th class="namedHeader" colspan="2">Turnier Archive <span class="badge"><?= count($archivTurnier); ?></span></th>
			</tr>
			<tr class="bg-warning fold">
				<th>Turniername</th>
				<th>Startdatum</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($archivTurnier as $key => $tournament): ?>
				<tr class="fold">
					<td><?= $tournament->showRealTournamentName(); ?></td>
					<td><?= $tournament->getDtStartingTime(); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

</div>