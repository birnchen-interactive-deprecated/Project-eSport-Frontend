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
    <div class="col-lg-3 avatarPanel">
        <?= Html::img($playerImage, ['class' => 'avatar-logo']); ?>
        <?php if($isMySelfe) : ?>
            <?php $form = ActiveForm::begin([
                'id' => 'profile-pic-form',
                // 'layout' => 'horizontal',
                'options' => ['enctype' => 'multipart/form-data'],
                // 'fieldConfig' => [
                //     'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
                //     'labelOptions' => ['class' => 'col-lg-2 control-label'],
                // ],
            ]); ?>
            <?= Html::fileInput('profilePic', null, ['accept' => 'image/x-png']); ?>
            <?= Html::submitInput('Hochladen'); ?>
            <?php ActiveForm::end(); ?>
        <?php endif; ?>
    </div>


    <?php echo $teamDetails->getName() . ' id:' . $teamDetails->getId(); ?>
</div>
