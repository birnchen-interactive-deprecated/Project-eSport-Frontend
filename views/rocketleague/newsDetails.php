<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 03.04.2019
 * Time: 16:10
 */

/* @var $this yii\web\View
 * @var $data array
 * @var $pos int
 */




$this->title = 'Rocket League News';
?>
<div class="rocket-League-news">

    <h1><?= $data[$pos]['title']; ?></h1>
    <p>
        <?= $data[$pos]['html']; ?>
    </p>

</div>