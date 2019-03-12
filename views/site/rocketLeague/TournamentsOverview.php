<?php

/* @var $this yii\web\View
    @var $tournamentList array<Tournaments>
*/

$this->title = '1v1 Tournaments';
?>
<div class="site-news">

	<?php foreach ($tournamentList as $key => $tournament): ?>
		<div><?= $tournament->getTournamentName(); ?></div>
	<?php endforeach; ?>

</div>