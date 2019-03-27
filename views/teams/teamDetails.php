<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 18.03.2019
 * Time: 09:15
 */

/* @var $this yii\web\View *
 * @var $teamDetails array
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<div class="site-team-details">
    <?php echo $teamDetails->getName() . ' id:' . $teamDetails->getId(); ?>
</div>
