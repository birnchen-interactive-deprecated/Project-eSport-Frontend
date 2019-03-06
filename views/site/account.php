<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$user = array(
    'nationality_id' => '1.png',
);

$playerNationality = 'images/nationality/'.$user['nationality_id'];

$this->title = 'My Account';
?>
<div class="site-account">

    <div class="leftPanel fclear">

    </div>

    <div class="rightPanel fclear">
        <div class="header"> <?= Html::img($playerNationality, ['class' => 'nationality-logo']); ?> </div>
    </div>


    <?php $form = ActiveForm::begin([
        'id' => 'account-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput() ?>

</div>
