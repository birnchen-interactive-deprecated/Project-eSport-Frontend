<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 18.03.2019
 * Time: 09:15
 */

/* @var $this yii\web\View *
 * @var $subTeamDetails array
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<div class="site-sub-team-details">
    <?php echo $subTeamDetails->getName() . ' id:' . $subTeamDetails->getId(); ?>
</div>
