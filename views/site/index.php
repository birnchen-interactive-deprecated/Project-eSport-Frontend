<?php

/* @var $this yii\web\View
 * @var $data array
 */

use yii\helpers\Html;

$this->title = 'Welcome to Project eSport\'s';

$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://project-esport.gg' . Yii::$app->request->url]);

Yii::$app->metaClass->writeMetaIndex($this, $this->title);

$bigNews = Html::a('<div><h1>' . $data[0]['title'] . '</h1><p>' . $data[0]['html'] . '</p></div>', ['/rocketleague/news-details', 'pos' => 0], ['class' => 'bigNews col-lg-9']);
$smallNews1 = Html::a('<div><h1>' . $data[1]['title'] . '</h1><p>' . $data[1]['html'] . '</p></div>', ['/rocketleague/news-details', 'pos' => 1], ['class' => 'smallNews col-lg-3']);
$smallNews2 = Html::a('<div><h1>' . $data[2]['title'] . '</h1><p>' . $data[2]['html'] . '</p></div>', ['/rocketleague/news-details', 'pos' => 2], ['class' => 'smallNews col-lg-3']);

?>
<div class="site-index">

    <div class="welcome">
        Willkommen auf unserer Turnier Website.<br>
        Besuch uns doch bei Fragen auf unserem <a class="dclink" href="https://discord.gg/f6NXNFy">Discord</a> Server.
        <br>
        <br>
        Noch kein Team angelegt??? <br>
        Melde dich auf <a class="dclink" href="https://discord.gg/f6NXNFy">Discord</a> bei <b><i><u>Birnchen | Pierre#5366</u></i></b>.


    </div>

    <div class="steamNews">

            <?= $bigNews; ?>
            <?= $smallNews1; ?>
            <?= $smallNews2; ?>

    </div>

</div>
