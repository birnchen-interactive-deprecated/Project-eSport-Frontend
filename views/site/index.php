<?php

/* @var $this yii\web\View
 * @var $data array
 */

use yii\helpers\Html;

$this->title = 'Welcome to Project eSport\'s';


$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://project-esport.gg' . Yii::$app->request->url]);

Yii::$app->metaClass->writeMetaIndex($this, $this->title);

?>
<div class="site-index">

    <div class="welcome">
        Willkommen auf unserer Turnier Website.<br>
        Besuch uns doch bei Fragen auf unserem <a class="dclink" href="https://discord.gg/f6NXNFy">Discord</a> Server.
        <br>
        <br>
        Noch kein Team angelegt??? <br>
        Melde dich auf <a class="dclink" href="https://discord.gg/f6NXNFy">Discord</a> bei <b><i><u>Birnchen | Pierre#5366</u></i></b>.
        <?= Html::a('rlNews' , ['/rocketleague/news-details', 'pos' => 0 ]); ?>


    </div>

    <div class="steamNews">
    	<div class="bigNews col-lg-9">
    		<h1><?= $data[0]['title']; ?></h1>
    		<p>
    			<?= $data[0]['html']; ?>
    		</p>
    	</div>
		<div class="smallNews col-lg-3">
			<h1><?= $data[1]['title']; ?></h1>
			<p>
				<?= $data[1]['html']; ?>
			</p>
		</div>

		<div class="smallNews col-lg-3">
			<h1><?= $data[2]['title']; ?></h1>
			<p>
				<?= $data[2]['html']; ?>
			</p>
		</div>

    </div>

</div>
