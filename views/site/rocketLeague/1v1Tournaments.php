<?php

/* @var $this yii\web\View
    @var $list array<Tournaments>
*/

$this->title = '1v1 Tournaments';
?>
<div class="site-news">

    1v1 Tournaments
	<?php foreach ($list as $key => $tournament): ?>
		<div><?= $tournament->getTournamentName(); ?></div>
	<?php endforeach; ?>
</div>